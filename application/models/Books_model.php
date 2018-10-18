<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
  

   public function data_books(){
     return $this->db->join('detail_catalogue_group','detail_catalogue_group.id_dcg=books.id_dcg','left')
                    ->join('catalogue_group','catalogue_group.id_cg=detail_catalogue_group.id_cg','left')
                    ->order_by('id_book', 'DESC')
                    ->limit(5)
                    ->get('books')
                    ->result();
   }

   public function get_id_number($id_book){
     return $this->db->where('id_book', $id_book)
                    ->get('books')
                    ->row();
   }

   public function data_book_detail($id_number){
     return $this->db->join('bookstatus','bookstatus.id_bookstatus=booknumber.id_bookstatus')
                    ->where('id_number', $id_number)
                    ->order_by('book_number', 'ASC')
                    ->get('booknumber')
                    ->result();
   }

   public function book_detail($id_number){
     return $this->db->join('detail_catalogue_group','detail_catalogue_group.id_dcg=books.id_dcg','left')
                    ->join('catalogue_group','catalogue_group.id_cg=detail_catalogue_group.id_cg','left')
                    ->where('id_number', $id_number)
                    ->get('books')
                    ->row();
   }

   public function getCG(){
     return $this->db->get('catalogue_group')
                    ->result();
   }

   public function get_dcg_by_cg($id_cg){
     return $this->db->where('id_cg', $id_cg)
                    ->get('detail_catalogue_group')
                    ->result();
   }
   public function simpan_buku($upload)
    {
        $data = array(
            'id_number'                        => $this->input->post('id_number'),
            'subject_heading'                 => $this->input->post('subject_heading'),
            'classification'                 => $this->input->post('classification'),
            'title'         => $this->input->post('title'),
            'subtitle'         => $this->input->post('subtitle'),
            'author'         => $this->input->post('author'),
            'add_author'         => $this->input->post('add_author'),
            'place'         => $this->input->post('place'),
            'publisher'         => $this->input->post('publisher'),
            'editor'         => $this->input->post('editor'),
            'edition'         => $this->input->post('edition'),
            'pub_year'         => $this->input->post('pub_year'),
            'isbn'         => $this->input->post('isbn'),
            'id_dcg'            => $this->input->post('id_dcg'),
            'notes'         => $this->input->post('notes'),
            'file_name'         => $upload['file_name']
        );
    
        $this->db->insert('books', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function save_one_book()
    {
        $data = array(
            'book_number'                        => $this->input->post('book_number'),
            'id_bookstatus'                 => '1',
            'id_number'            => $this->input->post('id_number'),
        );
    
        $this->db->insert('booknumber', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }

    public function delete_checked($id){
    $this->db->where('no_inventory', $id);
    $this->db->delete('booknumber');
  }

     public function getBookstatus(){
        return $this->db->get('bookstatus')
                    ->result();
     }

     public function edit_one_book($no_inventory){
    $data = array(
            'book_number'                   => $this->input->post('book_number'),
            'id_bookstatus'                 => $this->input->post('id_bookstatus'),
      );

    if (!empty($data)) {
            $this->db->where('no_inventory', $no_inventory)
        ->update('booknumber', $data);

          return true;
        } else {
            return null;
        }
  }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */