<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		// $this->load->view('welcome_message');
		echo "My Name is Ali";
	}

	public function newFun(){
		$echoVar = "Hi, There I am New Fun....";
		echo $echoVar;

	}
	public function newFun2(){
		$echoVar = "Hi, There I am New Fun 2....";
	
		$data['prnt'] = $echoVar;
		$this->load->view('myView',$data);

	}

	
}
