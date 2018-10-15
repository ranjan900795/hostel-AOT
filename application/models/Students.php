<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Model {

    public function __construct() {
        parent :: __construct();
        $this->load->database();
    }

    public function get_studentsdata() {

        $name = $_POST["name"];
        $dept = $_POST["dept"];
        $year = $_POST["year"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $confpass = $_POST["confpass"];
        $number = $_POST["number"];
        $data = array(
            'name' => $name,
            'department' => $dept,
            'year' => $year,
            'number' => $number,
            'email' => $email,
            'password' => $pass,
            'confirm_password' => $confpass    
        );
        if($confpass == $pass){
            $this->db->insert('hostellers', $data);
        }else {
            return FALSE;
        }
    }
    
}