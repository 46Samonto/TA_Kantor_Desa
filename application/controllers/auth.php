<?php
 class Auth extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model("auth_M");
    }


    public function index()
    {
        $data = [
            'title' => 'Masuk | SIKD Melayu'
        ];
        $this->load->view('front-end/Login',$data);
    }


    public function proses_login()
    { 
        $nik        = $this->input->post('nik');
        $password   = $this->input->post('password');
        $role       = $this->input->post('role_id');

        $this->form_validation->set_rules('nik','Nik','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata('pesan','<div class="alert alert-danger text-center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Nik atau password salah</div>');

            redirect ('auth','refresh');
        } else {

            $Nik    = $nik;
            $pass   = md5($password);
            $rol    = $role;

            $cek_db = $this->auth_M->login($Nik, $pass, $rol);
            // var_dump($cek_db); die();
            if ($cek_db) {

                foreach ($cek_db as $row) {
                    $sess_data['nik']            = $row->nik;
                    $sess_data['password']       = $row->password;
                    $sess_data['role_id']        = $row->role_id;
                    $this->session->set_userdata($sess_data);
                }
                
                if ($sess_data['role_id'] == 'Admin'){
                    redirect('user/dashboard');
                }
                if ($sess_data['role_id'] == 'Operator'){
                    redirect('user/dashboard');
                }else {
                    
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>NIK / Password Salah.</div>');
                    redirect('auth');
                }
                
            }
            else {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger text-center">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Di Mohon Melakukan Verifikasi melalui Operator Sistem ini.</div>');
                redirect('auth'); 
            }
        }
    }

} 
?>