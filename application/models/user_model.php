<?php
class User_model extends CI_Model{

  function validate($user,$pass){
    $this->db->where('username',$user);
    $this->db->where('password',$pass);
    $result = $this->db->get('user',1);
    return $result;
  }

}
