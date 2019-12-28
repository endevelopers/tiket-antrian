<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){

		parent::__construct();
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('UserModel');
		
		ini_set('display_error','off');
		error_reporting(0);

	}


    public function add_data(){
    
        $data['name'] = $this->input->post('nama');
        $data['email'] = $this->input->post('email');
        $data['telp'] = $this->input->post('telp');
        $data['alamat'] = $this->input->post('alamat');

        $data_db = $this->cek_email($data['email']);

        if($data_db->num_rows() == 1){


            foreach ($data_db->result() as $key => $value) {
                # code...
                $data['users_id'] = $value->users_id ;
            }

            $this->session->set_userdata($data);
            
            redirect(base_url().'main/show_case');

        }

    
        $data['user_id'] = $this->UserModel->add($data);

        if(!$data['user_id']){ 

            $this->session->set_flashdata('alert_success', 'Data Gagal Disimpan');

            redirect(base_url());

        } else {

            $this->session->set_userdata($data);
            
            redirect(base_url().'main/show_case');
        }

    }

    public function cek_email($email){
    
        return $this->UserModel->where_email($email);

    }

    public function login(){

        $data['email'] = $this->input->post('email') ;
        $data['password'] = $this->input->post('password') ;

        if($data['email'] || $data['password'] ){

            $data_login = $this->UserModel->login($data);
            if($data_login->num_rows() == 1){

                foreach ($data_login->result() as $key => $row) {
                    # code...
                    $login_data['account_id'] = $row->account_id ;
                    $login_data['nama'] = $row->nama ;
                    $login_data['email'] = $row->email ;
                    $login_data['password'] = $row->password ;
                    $login_data['role'] = $row->role ;
                }
                
                $this->session->set_userdata($login_data);
                if($this->session->userdata('role') > 0){

                    redirect(base_url().'admin');

                }

                redirect(base_url().'kasir');

                // var_dump($login_data);

            }
        }
        
        $this->load->view('login');
    }

    
}
