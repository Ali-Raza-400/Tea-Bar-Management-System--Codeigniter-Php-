<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

    public function index()
    {   $page_data['page_title']='employee';
        $this->load->view('template/header');
        $this->load->model("EmployeeModel");
        $data['employee'] = $this->EmployeeModel->getEmployee();
        
        $this->load->view('frontend/employee', $data,$page_data);
        $this->load->view('template/footer');
    }
    public function create()
    {
        $this->load->view('template/header');
        $this->load->view('frontend/create');
        $this->load->view('template/footer');
    }
    public function store()
    {
        $this->form_validation->set_rules('branch', 'Branch', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('rank', 'Rank', 'required');
        $this->form_validation->set_rules('dhaNO', 'DhaNo', 'required');
        $this->form_validation->set_rules('empName', 'EmpName', 'required');
        $this->form_validation->set_rules('MobileNo', 'MobileNumber', 'required');
        $this->form_validation->set_rules('Category', 'Category', 'required');
        

        if ($this->form_validation->run()) {
            $data = [
                'branch' => $this->input->post('branch'),
                'designation' => $this->input->post('designation'),
                'rank' => $this->input->post('rank'),
                'dhaNO' => $this->input->post('dhaNO'),
                'empName' => $this->input->post('empName'),
                'MobileNo' => $this->input->post('MobileNo'),
                'Category' => $this->input->post('Category')
            ];
            $this->load->model('EmployeeModel', 'emp');
            $this->emp->insertEmployee($data);
            $this->session->set_flashdata("status", "data Inserted successfully");
            redirect(base_url('employee'));
        } else { //agar data nei mile tu create wale page pe hu error (form_validation)=> requiemnt dekho 
            $this->create();
            // redirect(base_url('employee/add'));
        }
    }
    public function edit($id){
        $this->load->view('template/header');

        $this->load->model("EmployeeModel");
        $data['employee']=$this->EmployeeModel->editEmployee($id);
        
        $this->load->view('frontend/edit',$data);
        $this->load->view('template/footer');

    }
    public function update($id){
        $this->form_validation->set_rules('branch', 'Branch', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('rank', 'Rank', 'required');
        $this->form_validation->set_rules('dhaNO', 'DhaNo', 'required');
        $this->form_validation->set_rules('empName', 'EmpName', 'required');
        $this->form_validation->set_rules('MobileNo', 'MobileNumber', 'required');
        $this->form_validation->set_rules('Category', 'Category', 'required');

        if ($this->form_validation ->run()):

        $data = [
             'branch' => $this->input->post('branch'),
                'designation' => $this->input->post('designation'),
                'rank' => $this->input->post('rank'),
                'dhaNO' => $this->input->post('dhaNO'),
                'empName' => $this->input->post('empName'),
                'MobileNo' => $this->input->post('MobileNo'),
                'Category' => $this->input->post('Category')
        ];
        $this->load->model("EmployeeModel");
        $this->EmployeeModel->updateEmployee($data,$id);
        $this->session->set_flashdata("status", "Employee Data updated successfully");
        redirect(base_url('employee'));
    else:
$this->edit($id);

    endif;

    }

   public function delete($id)
   {
       $this->load->model('EmployeeModel');
       $this->EmployeeModel->deleteEmployee($id);
       $this->session->set_flashdata("status", "Employee Data updated successfully");
       redirect(base_url('employee'));
   }



}
