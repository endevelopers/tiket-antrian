<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {
	
    public function add($data){
         $this->db->insert('users', $data);
         return $this->db->insert_id();
    }

    public function where_email($email){

        return $this->db->get_where('users', array('email' => $email));
        
    }
    public function login($data){
        $pass = md5($data['password']); 
        return $this->db->get_where('account', array('email' => $data['email'], 'password' => $pass ));
    }


}