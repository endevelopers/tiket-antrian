<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

    public function __construct(){

        parent::__construct();
        
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('UserModel');
        $this->load->model('MainModel');
        $this->load->model('LoketModel');
        $this->load->model('TiketModel');
		
		ini_set('display_error','off');
		error_reporting(0);

	}

	public function index() {

        if(!$this->session->userdata('account_id')){
            redirect(base_url().'user/login');
        }

        if($this->session->userdata('loket_no')){
            redirect(base_url().'kasir/member_in_view');
        }   

        $data['loket_off'] = $this->LoketModel->off();

        $this->load->view('open_tiket', $data);

    }

    public function main(){

        if($this->session->userdata('main_id')){
            redirect(base_url().'kasir/member_in_view');
        }

        $data['name'] = $this->input->post('nama');
        $data['email'] = $this->input->post('email');
        $data['telp'] = $this->input->post('telp');
        $data['alamat'] = $this->input->post('alamat');


        $main['users_id'] = $this->MainModel->add_user($data);
        $main['main_id'] = $this->MainModel->add_main($main['users_id'] , $tiket_id);


        $this->session->set_userdata( $main );

        redirect(base_url().'kasir/run_question');
    }

    public function run_question(){

        if(!$this->session->userdata('account_id')){
            redirect(base_url().'user/login');
        }
        if(!$this->session->userdata('main_id')){
            redirect(base_url().'kasir/member_in_view');
        }

        $data['main_id']= $this->session->userdata('main_id');
        $data['users_id']= $this->session->userdata('users_id');
        $data['tiket_id']= $this->session->userdata('tiket_id');
        $data['tiket_no']= $this->session->userdata('tiket_no');
        $data['loket_no']= $this->session->userdata('loket_no');

		// header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('kasir_main', $data);

    }

    public function show_case_done(){
        
        $data['main_id'] = $this->session->userdata('main_id');
        $data['users_id']= $this->session->userdata('users_id');

        $cek_main = $this->MainModel->cekmain_data($data['main_id']);
        foreach ($cek_main->result() as $key => $value) {
            # code... 
            $data['start'] = $value->start ;
        }

            // var_dump($data['start']);
            $durasi = $this->MainModel->create_durasi($data);
            if($durasi){

                redirect(base_url().'kasir/generate_tiket');

            } else {

                redirect(base_url().'kasir/run_question');
            }
    
    }

    public function generate_tiket(){

        $main_id = $this->session->userdata('main_id');
        $user_id = $this->session->userdata('users_id');

        $get_main_id = $this->MainModel->cekmain_data($main_id);
        $get_users_id = $this->MainModel->get_users_id($user_id);
        
        $data['tiket_no'] = $this->session->userdata('tiket_no');
        $data['loket_no'] = $this->session->userdata('loket_no');

        foreach ($get_main_id->result() as $key => $v_main) {
            # code...

            $data['durasi'] = $v_main->durasi ;
        }

        foreach ($get_users_id->result() as $key => $v_user) {
            # code...
            $data['nama'] = $v_user->name ;
            $data['email'] = $v_user->email ;
        }

        $this->load->view('generate_tiket', $data);

    }


    public function question(){

        if(!$this->session->userdata('account_id')){
            redirect(base_url().'user/login');
        }

        $data['loket_no'] = $this->input->post('loket_no'); 

        $data_ = $this->LoketModel->cek_loket($data);

        // var_dump($data);
        if($data_){

            $this->LoketModel->loket_on($data);
            $this->session->set_userdata($data);
            
            redirect(base_url().'kasir/member_in_view');

        } else {

            redirect(base_url().'kasir');

        }

    }

    public function question_cancel(){  
        
        $data['loket_no'] = $this->session->userdata('loket_no');

        $this->LoketModel->loket_out($data);

        $this->session->unset_userdata('loket_no');

        $this->session->set_flashdata('alert', 'Tidak ada Nomor Antrian');
        redirect(base_url().'kasir/');

    }

    public function form_user(){

        if(!$this->session->userdata('loket_no')){
            redirect(base_url().'kasir/');
        }   

        if ($this->session->userdata('main_id')) {
            # code...   
            redirect(base_url().'kasir/main');

        }

        $data['loket_no'] = $this->session->userdata('loket_no');
        $data['tiket_no'] = $this->session->userdata('tiket_no');

        if($data['tiket_no'] == null ){
            $this->question_cancel();
        }
        // var_dump($d);

        $this->load->view('kasir', $data);
    }
    
    public function next(){

        $d = $this->session->userdata('tiket_id');
        // var_dump($d);
        $this->LoketModel->delete_antrian($d);
        $this->session->unset_userdata('tiket_no');

        redirect(base_url().'kasir/member_in_view');
    }
    
    public function next_tiket(){

        $this->session->unset_userdata('main_id');
        $this->session->unset_userdata('users_id');

        redirect(base_url().'kasir/next');
    }

    public function member_in(){

        $tiket_id = $this->session->userdata('tiket_id');

        $antrian_masuk = $this->LoketModel->delete_antrian($tiket_id);
        if($antrian_masuk){

            redirect(base_url().'kasir/form_user');
            
        } else {

            redirect(base_url().'kasir/member_in_view');
        }
    }

    public function member_in_view(){

        if(!$this->session->userdata('loket_no')){
            redirect(base_url().'kasir/');
        }   

        if ($this->session->userdata('main_id')) {
            # code...   
            redirect(base_url().'kasir/main');

        }

        $data['loket_no'] = $this->session->userdata('loket_no');

        if(!$this->session->userdata('tiket_no')){

            $this->TiketModel->create_tiket_loket($data);
        }
        $data['tiket_no'] = $this->session->userdata('tiket_no');

        if($data['tiket_no'] == null ){
            $this->question_cancel();
        }
        // var_dump($d);

        $this->load->view('member_in', $data);
    }
	
}
