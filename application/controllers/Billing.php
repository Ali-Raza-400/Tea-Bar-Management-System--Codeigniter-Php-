<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function postbill()
	{ $page_data['page_title']='Post Bill';
        $this->load->view('post_bill',$page_data);

    }
    public function ordercancellation()
	{ $page_data['page_title']='Order Cancellation';
        $this->load->view('order_cancellation',$page_data);

    }
    public function monthlybill()
	{ $page_data['page_title']='Monthly Bill';
        $this->load->view('monthly_bill',$page_data);

    }

}