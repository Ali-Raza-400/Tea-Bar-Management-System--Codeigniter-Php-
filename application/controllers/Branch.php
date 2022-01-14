<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	public function addbranch()
	{ $page_data['page_title']='Add Branch';
        $this->load->view('add_branch',$page_data);

    }
    public function addrank()
	{ $page_data['page_title']='Add Rank';
        $this->load->view('add_rank',$page_data);

    }
    public function searchemployee()
	{ $page_data['page_title']='Search Employee';
        $this->load->view('search_employee',$page_data);

    }
    public function addemployee()
	{ $page_data['page_title']='Add Employee';
        $this->load->view('add_employee',$page_data);

    }
}