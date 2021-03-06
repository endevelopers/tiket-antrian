
 

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class LoketModel extends CI_Model {


    public function data_loket(){
        $this->db->join('account', 'loket.account_id = account.account_id');
        return $this->db->get('loket');
    }

    public function off(){
        $this->db->where('status', 0);
        return $this->db->get('loket');
    }

    public function cek_loket($data){
        $loket_cek =  $this->db->get_where('loket', array('loket_no' => $data['loket_no'], 'status' => 0));
        if($loket_cek->num_rows() > 0){

            return true ;

        } else {

            return false ;

        }

        // echo $loket_cek->num_rows();
    }

    public function loket_on($data){

        $account_id = $this->session->userdata('account_id');
        $this->db->set(array('account_id' => $account_id ,'status' => 1));
        $this->db->where('loket_no', $data['loket_no']);
        return $this->db->update('loket');
        
    }

    public function loket_out($data){

        $account_id = $this->session->userdata('account_id');
        $this->db->set(array('account_id' => null ,'status' => 0));
        $this->db->where('loket_no', $data['loket_no']);
        return $this->db->update('loket');
        
    }

    public function delete_antrian($tiket_id){

        return $this->db->delete('antrian', array('tiket_id' => $tiket_id));

    }
    
    public function antrian(){

        $this->db->order_by('tiket_id', 'ASC');
        $this->db->limit(1);
        return $this->db->get('antrian');

    }

    public function list_antrian(){

        $this->db->join('tiket', 'antrian.tiket_id = tiket.tiket_id');
        $this->db->order_by('antrian_id', 'ASC');
        return $this->db->get('antrian');


    }

    public function panggil_ulang(){
        
        $this->db->join('tiket', 'board.tiket_id = tiket.tiket_id');
        $this->db->order_by('board_id', 'DESC');
        $this->db->limit(1);

        return $this->db->get('board');
    }

    public function add_board($data){
        return $this->db->insert('board', $data);
    }

}