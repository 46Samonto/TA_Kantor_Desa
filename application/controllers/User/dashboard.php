<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('back-end/dashboard/header');
        $this->load->view('back-end/dashboard/content');
        $this->load->view('back-end/dashboard/sidebar');
        $this->load->view('back-end/dashboard/footer');
    }

    function profil()
    {
        $this->load->view('back-end/profil');
    }
}

?>