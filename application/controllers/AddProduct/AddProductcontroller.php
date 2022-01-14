<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddProductcontroller extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $page_data['page_title']='add product';
        // fetching data
        $this->load->model('addProductModel');
        $data['Ali'] =$this->addProductModel->getdata();
        $this->load->view('addProduct/showData',$data,$page_data);
        

        $this->load->view('template/footer');
    }
    public function create()
    {$page_data['page_title']='add product';
        $this->load->view('template/header');
        $this->load->view('addProduct/create',$page_data);
        $this->load->view('template/footer');
    }
    public function store()
    {
        $this->form_validation->set_rules('product', 'product', 'required');
        if ($this->form_validation->run()) {
            $data = [
                "product" => $this->input->post("product")
            ];
            $this->load->model('addProductModel','addprod');
            $this->addprod-> insertdata($data);
            redirect(base_url('ProductAdded'));

        } else {
            $this->create();
        }
    }
}
