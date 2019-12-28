<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        if($this->session->userdata('role') < 1 ){
            redirect(base_url().'kasir');
        }

    }

    public function index(){

        $this->load->view('admin/site/header');
        $this->load->view('admin/site/menubar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/site/footer');

    }

    public function kasir(){

        $data['data_kasir'] = $this->UserModel->data_kasir();
        
        $this->load->view('admin/site/header');
        $this->load->view('admin/site/menubar');
        $this->load->view('admin/kasir', $data );
        $this->load->view('admin/site/footer');

    } 

    public function kasir_tambah(){

        $pass = $this->input->post('password');
        $data['email'] = $this->input->post('email');
        $data['password'] = md5($pass);
        $data['role'] = 0;

        if (empty($data['email']) && empty($data['password']) ) {
            # code...
            redirect(base_url().'admin/kasir');
        }

        $this->UserModel->add_kasir($data);
        redirect(base_url().'admin/kasir');

    }


	public function delete_kasir(){
        $account_id = $this->uri->segment(3);

        $account_id_delete = $this->UserModel->delete_kasir($account_id);
        if ($account_id_delete) {
            # code...
            
            redirect(base_url().'admin/kasir');
        } else {
            redirect(base_url().'admin/kasir');

        }

    }



    public function antrian(){

        $data['data_antrian'] = $this->LoketModel->list_antrian();
        
        $this->load->view('admin/site/header');
        $this->load->view('admin/site/menubar');
        $this->load->view('admin/antrian', $data );
        $this->load->view('admin/site/footer');

    }

    public function delete_antrian(){
        $tiket_id = $this->uri->segment(3);
        $tiket_id_delete = $this->LoketModel->delete_antrian($tiket_id);
        if ($tiket_id_delete) {
            # code...
            redirect(base_url().'admin/antrian');
        } else {
            redirect(base_url().'admin/antrian');

        }
    }


    public function loket(){
        
        $data['data_loket'] = $this->LoketModel->data_loket();
        
        $this->load->view('admin/site/header');
        $this->load->view('admin/site/menubar');
        $this->load->view('admin/loket', $data );
        $this->load->view('admin/site/footer');

    }

    public function main(){

        $data['data_main'] = $this->MainModel->data_main();
        
        $this->load->view('admin/site/header');
        $this->load->view('admin/site/menubar');
        $this->load->view('admin/main', $data );
        $this->load->view('admin/site/footer');

    }   


}
