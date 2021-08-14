<?php
class Auth extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Masuk | SIKD Melayu'
        ];
        $this->load->view('front-end/login',$data);
    }
}