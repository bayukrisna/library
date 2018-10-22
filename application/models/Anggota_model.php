<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
    }
    //===================================================================================\\
    //===================================================================================\\
    public function autocomplete_user($nama){
     $this->db->select('*');
     $this->db->from('user');
     $this->db->like('user.username',$nama);
     $this->db->or_like('user.id_user',$nama);
     $query = $this->db->get();
     return $query->result();
    }
    public function buat_kode(){
        $a = $this->db->select_max('no_trans_borrowing')->from('borrow')->get()->row();
        $b = substr($a->no_trans_borrowing,2);
        $kodes = $b + 1;
        $kode2 = sprintf("%05s", $kodes);
        $buat_kode = 'BK'.$kode2;
        return $buat_kode;
    }
    public function getBook(){
        return $this->db->get('books')->result();
    }
    public function getBookNumber($id){
     return $this->db->where('id_number', $id)
                    ->where('id_bookstatus', '1')
                    ->get('booknumber')
                    ->result();
   }
    public function data_user($id_user){
        return $this->db->join('sex', 'sex.id_sex = user.id_sex', 'left')
                        ->join('user_category', 'user_category.id_uc = user.id_uc', 'left')
                        ->join('user_status', 'user_status.id_us = user_category.id_us', 'left')
                        ->where('user.id_user', $id_user)
                        ->get('user')
                        ->row();
    }
    public function data_book_user($id_user){
        return $this->db->join('detail_of_borrow', 'detail_of_borrow.no_trans_borrowing = borrow.no_trans_borrowing', 'left')
                        ->join('borrowing_status', 'borrowing_status.id_bs = detail_of_borrow.id_bs', 'left')
                        ->join('booknumber', 'booknumber.no_inventory = detail_of_borrow.no_inventory')
                        ->join('books', 'books.id_number = booknumber.id_number')
                        ->where('borrow.id_user', $id_user)
                        ->get('borrow')
                        ->result();
    }

    public function simpan_peminjaman()
    {
        $data = array(
            'no_trans_borrowing' => $this->input->post('no_trans_borrowing'),
            'id_user' => $this->input->post('id_user'),
            'date_borrow' => date('Y-m-d')
        );
    
        $this->db->insert('borrow', $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
            
        }

    }
    public function simpan_renewal(){
        $data = array('due_date' => $this->input->post('due_date'));

        if (!empty($data)) {
                $this->db->where('id_detail_borrow', $this->input->post('id_detail_borrow'))
            ->update('detail_of_borrow', $data);

              return true;
            } else {
                return null;
            }
      }
    public function simpan_return($id, $id2){
        $data = array('id_bs' => '2');
        $data2 = array('id_bookstatus' => '1');
        $this->db->where('no_inventory', $id2)
            ->update('booknumber', $data2);
        if (!empty($data)) {
                $this->db->where('id_detail_borrow', $id)
            ->update('detail_of_borrow', $data);


              return true;
            } else {
                return null;
            }
      }
    public function simpan_deduct()
    {
        $data = array(
            'no_trans_borrowing' => $this->input->post('no_trans_borrowing'),
            'no_inventory' => $this->input->post('no_inventory'),
            'return_status' => $this->input->post('return_status'),
            'deduct' => $this->input->post('deduct'),
            'dateDeduct' => date('Y-m-d'),
        );
        $data2 = array('id_bs' => '2');
        $data3 = array('id_bookstatus' => '1');

        $this->db->insert('deduct', $data);

        if($this->db->affected_rows() > 0){
            $this->db->where('id_detail_borrow', $this->input->post('id_detail_borrow'))
            ->update('detail_of_borrow', $data2);

            $this->db->where('no_inventory', $data['no_inventory'])
            ->update('booknumber', $data3);
                return true;
        } else {
            return false;
            
        }

    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */