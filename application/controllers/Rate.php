<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rate extends CI_Controller {

	public function dailyrate()
	{ $page_data['page_title']='Daily Rate';
        $this->load->view('daily_rate',$page_data);

    }
    public function fixedrate()
	{ $page_data['page_title']='Fixed Rate';
        $this->load->view('fixed_rate',$page_data);

    }

}