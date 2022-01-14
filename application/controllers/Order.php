<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function generalteabar()
	{ $page_data['page_title']='General Teabar';
        $this->load->view('general_teabar',$page_data);

    }
    public function generalforofficer()
	{ $page_data['page_title']='General for Officers';
        $this->load->view('general_forofficer',$page_data);

    }
}