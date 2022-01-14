<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddSubProduct extends CI_Controller
{

public function index(){
    $this->load->view('template/header');
    $this->load->view('addsubProduct/showData');
    $this->load->view('template/footer');
}
 public function create(){

    $this->load->view('addsubProduct/create');
 }

}