<?php
/**
 * Created by PhpStorm.
 * User: Sono
 * Date: 11/14/2018
 * Time: 9:28 PM
 */

class User extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function register($user){
        return $this->db->insert('user', $user);
    }
}