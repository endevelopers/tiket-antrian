
 

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MainModel extends CI_Model {

    public function customer_number(){
        
        $date = new DateTime();
  
        $get_time = $this->db->get_where('tiket', array( 'date_in' => $date->format('Y-m-d') ));
        
        if($get_time->num_rows() > 0 ){

            $this->db->order_by('tiket_no','DESC');
            $this->db->limit(1);
            $this->db->where('date_in', $date->format('Y-m-d'));
            $tiket = $this->db->get('tiket');
            foreach ($tiket->result() as $key => $value) {
                # code...
                $t = $value->tiket_no ;
            }

            $this->db->insert('tiket', array('tiket_no' => $t + 1, 'date_in' => $date->format('Y-m-d') ));
            return $t + 1 ; 

        } else {

            $this->db->insert('tiket', array('tiket_no' => 1, 'date_in' => $date->format('Y-m-d') ));
            return 1 ;
            
        }

    }
	
    public function no_antrian(){

        $this->db->select('RIGHT(main.no_antrian, 4) as kode', FALSE);
        $this->db->order_by('no_antrian','DESC');
        $this->db->limit(1);
        $query = $this->db->get('main');

        if ($query->num_rows() <> 0 ) {
            # code...
            $data = $query->row();
            $kode = intval($data->kode) + 1;

        }else{

            $kode = 1 ;
        }

        $code = str_pad($kode, 4, "0", STR_PAD_LEFT);
        return time().$code ;

    }


    public function no_tiket(){

        $this->db->select('RIGHT(main.no_tiket, 4) as kode', FALSE);
        $this->db->order_by('no_tiket','DESC');
        $this->db->limit(1);
        $query = $this->db->get('main');

        if ($query->num_rows() <> 0 ) {
            # code...
            $data = $query->row();
            $kode = intval($data->kode) + 1;

        }else{

            $kode = 1 ;
        }

        $code = str_pad($kode, 4, "0", STR_PAD_LEFT);
        
        return time().$code ;

    }

    public function open_table($data){

        $data['status'] = 0;
        $this->db->insert('main', $data);
        return $this->db->insert_id();
        
    }

    public function show_on($users_id){
        return $this->db->get_where('main', array('users_id' => $users_id, 'status' => 0));
    }

    public function show_finish($data){
        date_default_timezone_set('Asia/Jakarta');

        $awal  = strtotime($data['start']); 
        
        $date = new DateTime();
        $akhir = strtotime($date->format('Y-m-d H:i:s')); 
    
        $diff  = $akhir - $awal;
        $jam   = floor($diff / (60 * 60));
        $menit = $diff - $jam * (60 * 60);

        if ($jam < 10) {
            # code...
            $jam = 0 .$jam ;
        }

        $data['finish'] = $date->format('Y-m-d H:i:s');
        $data['durasi'] = $jam.':'.floor( $menit / 60 )  ;

        $this->db->set($data);
        $this->db->where(array('users_id' => $data['users_id'], 'status' => 0 ));
        return $this->db->update('main');

    }

    public function add_user($data){
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function add_main($users_id, $tiket_id){

        $date = new DateTime();

        $data['users_id'] = $users_id ;
        $data['tiket_id'] = $tiket_id ;
        $data['start'] = $date->format('Y-m-d H:i:s'); 

        $this->db->insert('main', $data);
        return $this->db->insert_id();

    }

    public function cekmain_data($main_id){
        $this->db->where('main_id', $main_id);
        return $this->db->get('main');
    }

    public function create_durasi($data){
        date_default_timezone_set('Asia/Jakarta');

        $date = new DateTime();

        $awal  = strtotime($data['start']); 
        
        $akhir = strtotime($date->format('Y-m-d H:i:s')); 
    
        $diff  = $akhir - $awal;
        $jam   = floor($diff / (60 * 60));
        $menit = $diff - $jam * (60 * 60);

        if ($jam < 10) {
            # code...
            $jam = 0 .$jam ;
        }

        $data['finish'] = $date->format('Y-m-d H:i:s');
        $data['durasi'] = $jam.' Jam - '.floor( $menit / 60 ).' Menit'  ;

        $this->db->set($data);
        $this->db->where(array('main_id' => $data['main_id']));
        return $this->db->update('main');
    }

    public function get_users_id($users_id){
        
        $this->db->where('users_id', $users_id);
        return $this->db->get('users');
        
    }

    public function data_main(){

        $this->db->join('tiket', 'main.tiket_id = tiket.tiket_id');
        $this->db->join('users', 'main.users_id = users.users_id');
        return $this->db->get('main');

    }


}