<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TiketModel extends CI_Model {
	
    public function add_loket_tiket($data){
        
        $this->db->insert('tiket', $data);
        return $this->db->insert_id();

    }

    public function create_tiket_loket($data){

        $date = new DateTime();
        $this->db->where(array('loket_no' => null, 'date_in' => $date->format('Y-m-d') ));
        $this->db->order_by('tiket_no', 'ASC');
        $this->db->limit(1);
        $a = $this->db->get('tiket');


        foreach ($a->result() as $key => $value) {
            # code...
            $n['tiket_no'] = $value->tiket_no ;
            $n['tiket_id'] = $value->tiket_id ;
        }

        $this->session->set_userdata($n);

        $this->db->set('loket_no', $data['loket_no']);
        $this->db->where('tiket_id', $n['tiket_id']);
        $this->db->update('tiket');

        $tiket_id = $this->session->userdata('tiket_id');
        
        if($tiket_id){

            $this->db->insert('antrian', array('tiket_id' => $tiket_id  ));

        }

        return TRUE ;
        
    }

    public function board($tiket_id){
        $this->db->where('tiket_id', $tiket_id);
        return $this->db->get('tiket');
    }


}