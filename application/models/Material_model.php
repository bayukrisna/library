<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
    var $table = 'document'; //nama tabel dari database
    var $column_order = array(null, 'docNumber','docTags','docTitle','docAuthor', null, null); //field yang ada di table user
    var $column_search = array('docNumber','docTags','docTitle','docAuthor'); //field yang diizin untuk pencarian 
    var $order = array('docId' => 'asc');

    //===================================================================================\\
    //===================================================================================\\
    public function add_document($upload, $docId)
    {
        $data = array(
            'docId'                        => $docId,
            'docNumber'                        => $this->input->post('docNumber'),
            'docSubject'                 => $this->input->post('docSubject'),
            'docClassification'                 => $this->input->post('docClassification'),
            'docTitle'         => $this->input->post('docTitle'),
            'docSubtitle'         => $this->input->post('docSubtitle'),
            'docTags'         => $this->input->post('docTags'),
            'docAuthor'         => $this->input->post('docAuthor'),
            'docAddAuthor'         => $this->input->post('docAddAuthor'),
            'docPlace'         => $this->input->post('docPlace'),
            'docPublisher'         => $this->input->post('docPublisher'),
            'docEditor'         => $this->input->post('docEditor'),
            'docEdition'         => $this->input->post('docEdition'),
            'docPubYear'         => $this->input->post('docPubYear'),
            'docPurchaseDate'         => $this->input->post('docPurchaseDate'),
            'docIsbn'         => $this->input->post('docIsbn'),
            'dcgId'            => $this->input->post('dcgId'),
            'docNotes'         => $this->input->post('docNotes'),
            'docDescription'         => $this->input->post('docDescription'),
            'docImage'         => $upload['file_name']
        );
    
        $this->db->insert('document', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function add_document_number()
    {
        $data = array(
            'docId'                        => $this->input->post('docId'),
            'dnNumber'                        => $this->input->post('dnNumber'),
            'statusId'                        => '1',
            'dnCondition'                        => '1',
            'dnType'                        => $this->input->post('dnType'),
            'campusId'                        => $this->input->post('campusId'),
            'dnNotes'                        => $this->input->post('dnNotes'),
            'dnPurchaseDate'                        => $this->input->post('dnPurchaseDate'),
            'vendorId'                        => $this->input->post('vendorId'),
            'dnCost'                        => $this->input->post('dnCost'),
        );
    
        $this->db->insert('document_number', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_document($upload){
        if($upload['file_name'] != null){
          $a =  $upload['file_name']; 
        } else {
            $a = $this->input->post('docImage');
        }
        $data = array(
            'docNumber'                        => $this->input->post('docNumber'),
            'docSubject'                 => $this->input->post('docSubject'),
            'docClassification'                 => $this->input->post('docClassification'),
            'docTitle'         => $this->input->post('docTitle'),
            'docSubtitle'         => $this->input->post('docSubtitle'),
            'docAuthor'         => $this->input->post('docAuthor'),
            'docTags'         => $this->input->post('docTags'),
            'docAddAuthor'         => $this->input->post('docAddAuthor'),
            'docPlace'         => $this->input->post('docPlace'),
            'docPublisher'         => $this->input->post('docPublisher'),
            'docEditor'         => $this->input->post('docEditor'),
            'docEdition'         => $this->input->post('docEdition'),
            'docPubYear'         => $this->input->post('docPubYear'),
            'docPurchaseDate'         => $this->input->post('docPurchaseDate'),
            'docIsbn'         => $this->input->post('docIsbn'),
            'dcgId'            => $this->input->post('dcgId'),
            'docNotes'         => $this->input->post('docNotes'),
            'docDescription'         => $this->input->post('docDescription'),
            'docImage'         => $a
        );

        if (!empty($data)) {
                $this->db->where('docId', $this->input->post('docId'))
            ->update('document', $data);

              return true;
            } else {
                return null;
            }
    }
    public function edit_document_number(){
        $data = array(
            'dnNumber'                        => $this->input->post('dnNumber'),
            'statusId'                        => $this->input->post('statusId'),
            'dnCondition'                        => $this->input->post('dnCondition'),
            'dnType'                        => $this->input->post('dnType'),
            'campusId'                        => $this->input->post('campusId'),
            'dnNotes'                        => $this->input->post('dnNotes'),
            'dnCost'                        => $this->input->post('dnCost'),
            'dnPurchaseDate'                        => $this->input->post('dnPurchaseDate'),
            'vendorId'                        => $this->input->post('vendorId'),
        );
        if (!empty($data)) {
                $this->db->where('dnId', $this->input->post('dnId'))
            ->update('document_number', $data);

              return true;
            } else {
                return null;
            }
    }
    //===================================================================================\\
    //===================================================================================\\
    public function add_locker()
    {
        $data = array(
            'lockerNumber'                        => $this->input->post('lockerNumber'),
            'campusId'                        => $this->input->post('campusId'),
            'lockerNotes'                        => $this->input->post('lockerNotes'),
            'statusId'                        => '1'
        );
    
        $this->db->insert('locker', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_locker(){
        $data = array(
            'lockerNumber'                        => $this->input->post('lockerNumber'),
            'campusId'                        => $this->input->post('campusId'),
            'lockerNotes'                        => $this->input->post('lockerNotes'),
            'statusId'                        => $this->input->post('statusId')
        );
        if (!empty($data)) {
                $this->db->where('lockerId', $this->input->post('lockerId'))
            ->update('locker', $data);

              return true;
            } else {
                return null;
            }
    }
    //===================================================================================\\
    //===================================================================================\\
    public function add_cd($upload)
    {
        $data = array(
            'cdNumber'                        => $this->input->post('cdNumber'),
            'cdSubject'                 => $this->input->post('cdSubject'),
            'cdClassification'                 => $this->input->post('cdClassification'),
            'cdTitle'         => $this->input->post('cdTitle'),
            'cdDirector'         => $this->input->post('cdDirector'),
            'cdActor'         => $this->input->post('cdActor'),
            'cdProducer'         => $this->input->post('cdProducer'),
            'cdDuration'         => $this->input->post('cdDuration'),
            'cdPlace'         => $this->input->post('cdPlace'),
            'cdPurchaseDate'         => $this->input->post('cdPurchaseDate'),
            'cdNotes'         => $this->input->post('cdNotes'),
            'cdQty'         => $this->input->post('cdQty'),
            'cdImage'         => $upload['file_name']
        );
    
        $this->db->insert('cd', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
    public function edit_cd($upload){
        if($upload['file_name'] != null){
          $a =  $upload['file_name']; 
        } else {
            $a = $this->input->post('cdImage');
        }
        $data = array(
            'cdNumber'                        => $this->input->post('cdNumber'),
            'cdSubject'                 => $this->input->post('cdSubject'),
            'cdClassification'                 => $this->input->post('cdClassification'),
            'cdTitle'         => $this->input->post('cdTitle'),
            'cdDirector'         => $this->input->post('cdDirector'),
            'cdActor'         => $this->input->post('cdActor'),
            'cdProducer'         => $this->input->post('cdProducer'),
            'cdDuration'         => $this->input->post('cdDuration'),
            'cdPlace'         => $this->input->post('cdPlace'),
            'cdPurchaseDate'         => $this->input->post('cdPurchaseDate'),
            'cdNotes'         => $this->input->post('cdNotes'),
            'cdQty'         => $this->input->post('cdQty'),
            'cdImage'         => $a
        );

        if (!empty($data)) {
                $this->db->where('cdId', $this->input->post('cdId'))
            ->update('cd', $data);

              return true;
            } else {
                return null;
            }
    }

    ///////////////////////////////
    //////////////////////////////
    private function _get_datatables_query()
    {
        
        $this->db->from('document');

        $i = 0;
    
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */