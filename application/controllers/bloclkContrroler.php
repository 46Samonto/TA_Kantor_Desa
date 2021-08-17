<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlockedController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        
    }
    public function index()
    {
        $data ['judul'] = 'ERORR'; 
        $this->load->view('auth/auth_user/nav_login', $data);
        $this->load->view('auth/auth_user/error');
        $this->load->view('auth/admin/footer');
    }
}
?>