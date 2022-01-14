
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


    public function home()
	{   
        $page_data['page_title']='Home';
        $this->load->view('index',$page_data);

    }
	public function addproduct()
	{  
        $page_data['page_title']='add product';
        $this->load->view('add_product',$page_data);

    }
    public function addsubproduct()
	{    $page_data['page_title']='add subproduct';
        $this->load->view('add_subproduct',$page_data);

    }
    public function adddesignation()
	{ $page_data['page_title']='add Designation';
        $this->load->view('add_designation',$page_data);

    }
}