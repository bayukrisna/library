<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}
  

   public function data_books(){
<<<<<<< HEAD
     return $this->db
=======
     return $this->db->join('detail_catalogue_group','detail_catalogue_group.id_dcg=books.id_dcg','left')
                    ->join('catalogue_group','catalogue_group.id_cg=detail_catalogue_group.id_cg','left')
                    ->limit(5)
>>>>>>> 8a4cb2094383033596878bb664a24f9ba024f011
                    ->get('books')
                    ->result();
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
            'id_dcg'            => $this->input->post('id_dcg'),
            'title'         => $this->input->post('title'),
            'subtitle'         => $this->input->post('subtitle'),
            'author'         => $this->input->post('author'),
            'add_author'         => $this->input->post('add_author'),
            'editor'         => $this->input->post('editor'),
            'pub_year'         => $this->input->post('pub_year'),
            'isbn'         => $this->input->post('isbn'),
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
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */