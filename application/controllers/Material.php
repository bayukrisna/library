<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Material_model');
		$this->load->model('Master_model');
		$this->load->helper(array('url','download'));
	}
	public function index()
	{
			$data['books'] = $this->Master_model->getDocument();
			$data['main_view'] = 'Books/data_books_view';
			$this->load->view('template', $data);
	}
	//===================================================================================\\
	//===================================================================================\\
	public function document()
	{
			$data['getCG'] = $this->Master_model->getCG();
			$data['getDCG'] = $this->Master_model->getDCG();
			$data['document'] = $this->Master_model->getDocument();
			$data['main_view'] = 'Material/document_view';
			$this->load->view('template', $data);
	}
	public function document_detail($docId)
	{
			$data['getCG'] = $this->Master_model->getCG();
			$data['getDCG'] = $this->Master_model->getDCG();
			$data['document'] = $this->db->where('document.docId', $docId)->join('detail_catalogue_group', 'detail_catalogue_group.dcgId=document.dcgId')->join('catalogue_group', 'catalogue_group.cgId=detail_catalogue_group.cgId')->get('document')->row();
			$data['main_view'] = 'Material/document/document_detail_view';
			$this->load->view('template', $data);
	}
	public function document_edit($docId)
	{
			$data['getCG'] = $this->Master_model->getCG();
			$data['getDCG'] = $this->Master_model->getDCG();
			$data['document'] = $this->db->where('docId', $docId)->join('detail')->get('document')->row();
			$data['main_view'] = 'Material/document/document_edit_view';
			$this->load->view('template', $data);
	}
	public function add_document()
	{
		$docId = $this->db->select('max(docId) as total')
                ->get('document')->row();
        $docId = $docId->total + 1;
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
			if($this->Material_model->add_document($this->upload->data(), $docId) == TRUE){
				if ($this->cart->contents() != null){
					foreach($this->cart->contents() as $item){
			          $data = array(
			            'docId'    => $docId,
			            'dnNumber'    => $item['dnNumber'],
			            'statusId'    => '1',
			            'dnCondition'    => '1',
			            'dnType'    => $item['dnType'],
			            'dnNotes'    => $item['dnNotes'],
			          );
			          $this->db->insert('document_number', $data);
			        }
				} 
		        $this->cart->destroy();
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Model berhasil disimpan </div>');
            	redirect(base_url('Material/document'));	
			}  else{
				$this->cart->destroy();
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect(base_url('Material/document'));	
		}
	}
	public function add_document_number()
	{
		$docId = $this->input->post('docId');
		if($this->Material_model->add_document_number() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Material/document_detail/'.$docId);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Material/document_detail/'.$docId);
		}
	}
	public function destroy(){
		$this->cart->destroy();
	}
	public function edit_document(){
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
		if($this->Material_model->edit_document($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Material/document');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Material/document');
		}
	}
	public function edit_document_number(){
		$docId = $this->input->post('docId');
		if($this->Material_model->edit_document_number() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Material/document_detail/'.$docId);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Material/document_detail/'.$docId);
		}
	}
	public function delete_document($id){
		if ($this->db->where('docId', $id)->delete('document') == TRUE) {
			$this->db->where('docId', $id)->delete('document_number');
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Material/document');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Material/document');
		}
	}
	public function delete_document_number($id, $docId){
		if ($this->db->where('dnId', $id)->delete('document_number') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Material/document_detail/'.$docId);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Material/document_detail/'.$docId);
		}
	}
	public function add_to_cart()
	{
			$a = count($this->cart->contents())+1;	
			$data = array(
			        'id'      => $a,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'buku',
			        'dnNumber' => $this->input->post('dnNumber'),
			        'dnType' => $this->input->post('dnType'),
			        'dnNotes' => $this->input->post('dnNotes'),
			);
			$this->cart->insert($data);
			
			$this->show_cart();
		
	}
	public function add_to_cart2()
	{
			$a = count($this->cart->contents())+1;	
			$data = array(
			        'id'      => $a,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'buku',
			        'dnNumber' => $this->input->post('dnNumber'),
			        'docId' => $this->input->post('docId'),
			        'dnType' => $this->input->post('dnType'),
			        'dnNotes' => $this->input->post('dnNotes'),
			);
			$this->cart->insert($data);
			
			$this->show_cart();
		
	}
	public function show_cart(){
			$option = "";
          	$i = 1;
			foreach ($this->cart->contents() as $items) {
				$option .= '<tr>
							<td>'.$i++.'</td>
							<td>'.$items['dnNumber'].'</td>
							<td>'.$items['dnType'].'</td>
							<td>'.$items['dnNotes'].'</td>
							<td><button  type="button" title="Delete data" class="btn btn-xs btn-danger fa fa-trash-o" onclick="delete_cart(this.value)" value="'.$items['rowid'].'"></button></td>
							</tr>';	
				
				
			}
			
			echo $option;
	}
	public function delete_cart($p)	{
		$data = array(
           'rowid' => $p,
           'qty'   => 0
        );
		$this->cart->update($data);
		$this->show_cart();
	}
	//===================================================================================\\
	//===================================================================================\\
	public function locker(){
		$data['locker'] = $this->Master_model->getLocker();
		$data['main_view'] = 'Material/locker_view';
		$this->load->view('template', $data);
	}
	public function add_locker(){
		if($this->Material_model->add_locker() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Material/locker');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Material/locker');
		}
	}
	public function delete_locker($id){
		if ($this->db->where('lockerId', $id)->delete('locker') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Material/locker');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Material/locker');
		}
	}
	public function edit_locker(){
		if($this->Material_model->edit_locker() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Material/locker');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Material/locker');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function cd()
	{
			$data['cd'] = $this->Master_model->getCD();
			$data['main_view'] = 'Material/cd_view';
			$this->load->view('template', $data);
	}
	public function add_cd()
	{
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
			if($this->Material_model->add_cd($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Model berhasil disimpan </div>');
            	redirect(base_url('Material/cd'));	
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect(base_url('Material/cd'));	
		}
	}
	public function edit_cd(){
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
		if($this->Material_model->edit_cd($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Material/cd');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Material/cd');
		}
	}
	public function delete_cd($cd){
		if ($this->db->where('cdId', $id)->delete('cd') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/cd');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/cd');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function get_dcg_by_cg($param = NULL){
		$id_cg = $param;
		$result = $this->Master_model->get_dcg_by_cg($id_cg);
		$option = "";
		
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->dcgId."'>".$data->dcgName."</option>";
			
		}
		echo $option;
	}
	public function contents(){
		$coo = $this->db->select('max(docId) as total')
                ->get('document')->row();
        $total = $coo->total;
        echo $total;
	} 
}