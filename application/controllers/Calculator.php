<?php

if (! Defined ('BASEPATH')) exit ('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Sono
 * Date: 11/7/2018
 * Time: 12:45 PM
 */

class Calculator extends CI_Controller{

    public function index(){
        $this->load->view('registration_form');
    }

    public function calculate(){

        $data['firstValue'] = $this->input->post('firstValue');
        $data['secondValue'] = $this->input->post('secondValue');
        $data['operator'] = $this->input->post('operator');
        $data['answer'] = $this->calc($data['firstValue'],$data['secondValue'],$data['operator']);
        $this->load->view('calculation',$data);

    }

    public function calc($firstValue,$secondValue,$operator){
        switch ($operator) {
            case '+':
                return $firstValue+$secondValue;
                break;
            case '-':
                return $firstValue-$secondValue;
                break;
            case '*':
                return $firstValue*$secondValue;
                break;
            case '/':
                if($secondValue!=0) {
                    return $firstValue / $secondValue;
                }else{
                    return "Error : Divide by Zero";
                }
                break;
            default:
                return "Invalid Operation";
                break;
        }
    }

}