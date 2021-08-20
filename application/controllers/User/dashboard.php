<?php
class Dashboard extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_M');
    }

    public function index()
    {
        $data = ['title' => 'Selamat Datang | SIKD MELAYU'];
        $this->load->view('back-end/dashboard/content',$data);
    }

    public function beranda()
    {
        $data = ['title' => 'Selamat Datang | Beranda',
                'jumlah_L' => $this->auth_M->get_jml_L()
            ];
        // var_dump($data['jumlah_L']); die();
        $this->load->view('back-end/dashboard/content',$data);
    }

    function profil()
    {
         $data = ['title' => 'SIKD | My Profil'];
        $this->load->view('back-end/profil', $data);
    }
}

?>