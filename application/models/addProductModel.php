<?php 

class addProductModel extends CI_Model
{



    public function getdata()
    {
        $query=$this->db->get('addproduct');
        return  $query->result();
        
    }
    public function insertdata($data){


        return $this->db->insert('addproduct',$data);


    }

}