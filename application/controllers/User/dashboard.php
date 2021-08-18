<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = ['title' => 'Selamat Datang | SIKD MELAYU'];
        $this->load->view('back-end/dashboard/content',$data);
    }

    public function beranda()
    {
        $data = ['title' => 'Selamat Datang | Beranda'];
        $this->load->view('back-end/dashboard/content',$data);
    }

    function profil()
    {
         $data = ['title' => 'SIKD | My Profil'];
        $this->load->view('back-end/profil', $data);
    }
}

?>