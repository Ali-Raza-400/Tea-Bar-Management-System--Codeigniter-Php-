<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .alert-danger {
            color: #842029;
            background-color: #f8d7da;
            border-color: #f5c2c7;
        }

        
        
    </style>
    <title>login Page</title>
</head>

<body>
    <?php defined('BASEPATH') or exit('No direct script access allowed');
    class Admin extends CI_Controller
    {
        public function index()
        {
            if (!($this->input->post('first_name') == '') || !($this->input->post('password') == '')) {
                $first_name = $this->input->post('first_name');
                $password = sha1($this->input->post('password'));
                $result = $this->db->get_where('users', array('first_name' => $first_name, 'password' => $password))->result_array();
                // echo $this->db->last_query(); 
                //print_r($result); 
                if ($result) {
                    $uid = $result[0]['id'];
                    $first_name = $result[0]['first_name'];
                    // $last_name = $result[0]['last_name'];
                    $email = $result[0]['email'];
                    $this->session->set_userdata('admin_uid', $uid);
                    $this->session->set_userdata('admin_first_name', $first_name);
                    // $this->session->set_userdata('admin_last_name', $last_name);
                    $this->session->set_userdata('admin_email', $email);

                    $page_data['page_title'] = "Dashboard";
                    $page_data['page'] = "dashboard";
                    $page_data['error'] = "";
                    $this->load->view('index', $page_data);
                } else {
                    // echo "<span class='alert alert-danger'>" . "invalid Username password" . "</span>";

                    $page_data['page_title'] = 'logic Admin';
                    $page_data['error'] = "<span class='alert alert-danger'>" . "invalid Username password" . "</span>";
                    $this->load->view('admin/login', $page_data);
                }
            } else {
                // echo"invaild email password";
                $page_data['page_title'] = 'logic Admin';
                // $page_data['error'] = "<span class='alert alert-danger'>" . "invalid Username password" . "</span>";
                $this->load->view('admin/login', $page_data);

            }
        }
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('admin');
        }
    }
