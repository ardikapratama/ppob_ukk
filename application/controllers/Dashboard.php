<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


        public function __construct()
        {
            parent::__construct();
           
        }
        public function index()
        {
            if(
                $this->session->userdata('login')!=true){
                    redirect(base_url('index.php/login'),'refresh');    
                }
            
        $data['konten']="home";
        $this->load->view('template',$data);
        
    }
    
    // public function profil()
    // {
    //     $data['konten']="v_profil";
    //     $this->load->view('template', $data, FALSE);
    // }
    // public function menu()
    // {
    //     $data['konten']="menu";
    //     $this->load->view('template', $data, FALSE);
    // }

}

/* End of file Controllername.php */
