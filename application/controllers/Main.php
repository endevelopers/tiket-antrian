<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct(){

        parent::__construct();
        
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->model('UserModel');
        $this->load->model('MainModel');
        $this->load->model('LoketModel');
		
		ini_set('display_error','off');
		error_reporting(0);

    }
    
    public function board(){
        
        $this->load->view('boarding');

    }

	public function index() {

        $data['customer_number'] = $this->MainModel->customer_number();
        $this->load->view('main', $data);

    }

    public function show_case(){  

        if(!$this->session->userdata('users_id')){
            redirect(base_url().'main');
        }

        $data['users_id'] = $this->session->userdata('users_id');
        // $data['status'] = 0;

        $show_on = $this->MainModel->show_on($data['users_id']);
        // var_dump($show_on->num_rows());
    
        if ($show_on->num_rows() == 0) {
            # code...
            $data['no_antrian'] = $this->MainModel->no_antrian();
            $data['no_tiket'] = $this->MainModel->no_tiket();
            $this->MainModel->open_table($data);

            redirect(base_url().'main/show_case');

        } else {

            foreach ($show_on->result() as $key => $value) {
                # code...
                $data['no_antrian'] = $value->no_antrian ;
                $data['no_tiket'] = $value->no_tiket ;
                $data['start'] = $value->start ;
                
            }

            $this->session->set_userdata($data);
            
        }

        $this->load->view('show_case', $data);

    }

    public function show_finish(){

        if(!$this->session->userdata('users_id')){
            redirect(base_url().'main');
        }

        $data['users_id'] = $this->session->userdata('users_id');
        $data['start'] = $this->session->userdata('start');
        $data['no_antrian'] = $this->session->userdata('no_antrian');
        $data['no_tiket'] = $this->session->userdata('no_tiket');
        $data['status'] = 1 ;

        $response = $this->MainModel->show_finish($data);

        // var_dump($response);

        if ($response) {
            # code...
            $this->load->view('tiket_send');

        } else {

            $this->session->sess_destroy();
            
        }

        // redirect(base_url().'main/show_case');

    }

    public function logout(){

        $data['loket_no'] = $this->session->userdata('loket_no');
        $data['tiket_id'] = $this->session->userdata('tiket_id');

        $this->LoketModel->loket_out($data);
        $this->LoketModel->delete_antrian($data['tiket_id']);
        $this->session->sess_destroy();

        redirect(base_url().'user/login');
    }
    

	
}
