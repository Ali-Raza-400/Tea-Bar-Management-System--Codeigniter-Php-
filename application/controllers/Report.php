<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {


    public function printmonthlybill()
	{ $page_data['page_title']='print Monthly bill';
        $this->load->view('printmonthly_bill',$page_data);

    }
    public function monthlybillsummary()
	{
        $page_data['page_title']='Monthly bill summary';
        $this->load->view('monthlybill_summary',$page_data);

    }
    public function productconsumption()
	{
         $page_data['page_title']='Product Consumption';
        $this->load->view('product_consumption',$page_data);

    }
    public function employeedetailreport()
	{ 
        $page_data['page_title']='Employee detail';
        $this->load->view('employeedetail_report',$page_data);

    }
    public function branchwisereport()
	{ 
        $page_data['page_title']='Branchwise Report';
        $this->load->view('branchwise_report',$page_data);

    }
    public function recievepayment()
	{ 
        $page_data['page_title']='Recieve Payement';
        $this->load->view('recieve_payment',$page_data);

    }
    public function outstsandingpayment()
	{ 
        $page_data['page_title']='outstanding';
        $this->load->view('outstanding_payment',$page_data);

    }
    public function dailyrecieve()
	{
        $page_data['page_title']='Daily recieve';
        $this->load->view('daily_recieve',$page_data);

    }
  
	

	
}