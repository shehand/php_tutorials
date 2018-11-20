<?php
if (! Defined ('BASEPATH')) exit ('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Sono
 * Date: 11/14/2018
 * Time: 3:56 PM
 */

class Register extends CI_Controller {

    function __construct(){
        parent::__construct();
        // load form and url helpers
        $this->load->helper(array('form', 'url'));
        // load form_validation library
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('registration_form');
    }

    public function register(){

        $this->form_validation->set_rules('fName','First Name', 'required');
        $this->form_validation->set_rules('lName','Last Name', 'required');
        $this->form_validation->set_rules('department','Department', 'required');
        $this->form_validation->set_rules('username','Username', 'required');
        $this->form_validation->set_rules('phone','Contact Number', 'required|max_length[12]|min_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_form');
        }
        else {
            $user['fname'] = $_POST['fName'];
            $user['lname'] = $_POST['lName'];
            $user['username'] = $_POST['username'];
            $user['department'] = $_POST['department'];
            $user['email'] = $_POST['email'];
            $user['phone'] = $_POST['phone'];
            $user['password'] = $_POST['password'];

            $this->load->model('User');
            $query = $this->User->register($user);

            if($query){
                $this->load->view('registration_form');
            }
            else{
                header('location:'.base_url().$this->index());
                $this->session->set_flashdata('error','Failed to register user');
            }
        }
    }
}