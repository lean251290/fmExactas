<?php
class Login_model extends CI_model{

    /**public function login_usuario($user, $pass){
        $this->db->where('username', $user);
        $this->db->where('pass', $pass);
        $result = $this->db->get('users');
       if($result->num_rows() > 0){
           return true;
        }else{
           return false;
        }
        
    }**/

    public function login_usuario($username, $password){
        $this->db->where(['username' => $username,
                          'pass' => $password]);
        return $this->db->get('users')->row();
    }

  }