<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function index()
    {
        $this->load->view('Layout/header');
        $this->load->view('Layout/sidebar');
        if($data['posts']=$this->user_model->get_post())
        {
            $this->load->view('Pages/home',$data);
        }
        else{
            $this->load->view('Pages/home',$data);
        }
        $this->load->view('Layout/footer');

    }
    function register()
    {
        $this->load->view('Layout/header');
        $this->load->view('Layout/sidebar');
        $this->load->view('Pages/register');
        $this->load->view('Layout/footer');
    }
    function login()
    {
        $this->load->view('Layout/header');
        $this->load->view('Layout/sidebar');
        $this->load->view('Pages/login');
        $this->load->view('Layout/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
 ?>
