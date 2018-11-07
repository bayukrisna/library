<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
    }
    //===================================================================================\\
    //===================================================================================\\
    public function autocomplete_user($nama){
     $this->db->select('*');
     $this->db->from('user');
     $this->db->like('user.userUsername',$nama);
     $this->db->or_like('user.userStudentId',$nama);
     $query = $this->db->get();
     return $query->result();
    }
    public function buat_kode(){
        $a = $this->db->select_max('transId')->from('transaction')->get()->row();
        $b = substr($a->transId,2);
        $kodes = $b + 1;
        $kode2 = sprintf("%05s", $kodes);
        $buat_kode = 'TR'.$kode2;
        return $buat_kode;
    }
    public function getBook(){
        return $this->db->get('document')->result();
    }
    public function getBookNumber($id){
     return $this->db->where('docId', $id)
                    ->where('statusId', '1')
                    ->get('document_number')
                    ->result();
   }
    public function data_user($id_user){
        return $this->db->join('sex', 'sex.sexId = user.sexId', 'left')
                        ->join('user_category', 'user_category.ucId = user.ucId', 'left')
                        ->join('user_status', 'user_status.usId = user_category.usId', 'left')
                        ->where('user.userId', $id_user)
                        ->get('user')
                        ->row();
    }
    public function data_book_user($id_user){
        return $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->get('transaction')
                        ->result();
    }
    public function data_transaction(){
        return $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('booknumber', 'booknumber.no_inventory = detail_of_borrow.no_inventory')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->get('transaction')
                        ->result();
    }

    public function simpan_peminjaman()
    {
        $data = array(
            'transId' => $this->input->post('transId'),
            'userId' => $this->input->post('userId'),
            'transBorrowingDate' => $this->input->post('borrow_date')
        );
    
        $this->db->insert('transaction', $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
            
        }

    }
    public function simpan_renewal(){
        $data = array('tdDueDate' => $this->input->post('tdDueDate'));

        if (!empty($data)) {
                $this->db->where('tdId', $this->input->post('tdId'))
            ->update('transaction_detail', $data);

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
            'tdReturnDate' => $this->input->post('tdReturnDate'),
            'tdStatus' => $this->input->post('tdStatus'),
            'tdNotes' => $this->input->post('tdNotes')
        );
        if($this->input->post('filter') == 'doc'){
            $statusBook = array('statusId' => '1', 'dnCondition' => '2', 'dnNotes' => $this->input->post('notes'));
            $this->db->where('dnId', $this->input->post('nomor'))
            ->update('document_number', $statusBook);
        } else if($this->input->post('filter') == 'locker'){
            $locker = array('statusId' => '1', 'lockerNotes' => $this->input->post('notes'));
            $this->db->where('lockerId', $this->input->post('nomor'))
            ->update('locker', $locker);
        }

        $this->db->where('tdId', $this->input->post('tdId'))
            ->update('transaction_detail', $data);

        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
            
        }

    }
}

/* End of file prodi_model.php */
/* Location: ./application/models/prodi_model.php */