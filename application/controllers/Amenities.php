<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amenities extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function gallery()
	{
        if(isset($_SESSION['id'])){
            $this->load->view('header_loggedin');
            $this->load->view('gallery');
            $this->load->view('footer');
        }else{
            $this->load->view('header');
            $this->load->view('gallery');
            $this->load->view('footer');
        } 
	}
    
    public function food()
	{
        if(isset($_SESSION['id'])){
            $this->load->view('header_loggedin');
            $this->load->view('food');
            $this->load->view('footer');
        }else{
            $this->load->view('header');
            $this->load->view('food');
            $this->load->view('footer');
        } 
	}
    
    public function news()
	{
        if(isset($_SESSION['id'])){
            $this->load->view('header_loggedin');
            $this->load->view('news');
            $this->load->view('footer');
        }else{
            $this->load->view('header');
            $this->load->view('news');
            $this->load->view('footer');
        } 
	}
}
