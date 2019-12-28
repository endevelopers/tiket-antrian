<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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

    public function board(){
        $antrian = $this->LoketModel->antrian();
        foreach ($antrian->result() as $key => $value) {
            # code...
            $tiket_id = $value->tiket_id;
        }

        // echo $tiket_id ;

        $tiket = $this->TiketModel->board($tiket_id);

        $tiket_board = array();
        foreach ($tiket->result() as $key => $value) {
            # code...
            $tiket_board = $value ;
        }


		header('Content-Type: application/json');
		echo json_encode($tiket_board); 

    }


    public function panggil_ulang(){

        $panggil_ulang = $this->LoketModel->panggil_ulang($tiket_id);

        $tiket_board = array();
        foreach ($panggil_ulang->result() as $key => $value) {
            # code...
            $tiket_board = $value ;
        }

		header('Content-Type: application/json');
        echo json_encode($tiket_board); 
        
    }

    public function callback_board(){

        $data['tiket_id'] = $_POST['tiket_id'];
        $callback = $this->LoketModel->add_board($data);

		header('Content-Type: application/json');
        echo $callback ;

    }
    
	
}
