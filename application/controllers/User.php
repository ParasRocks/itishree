<?php
class User extends CI_Controller
{
    public function reg()
    {
        if($this->user_model->register())
        {
            redirect('/');
        }
    }
    public function log()
    {
        if($this->user_model->login())
        {
            redirect('/');
        }
        else{
            return "error";
        }
    }
    public function post()
    {
        $this->load->view('Layout/header');
        $this->load->view('Pages/post');
        $this->load->view('Layout/sidebar');
        $this->load->view('Layout/footer');
    }
    public function posts()
    {
        if($this->user_model->post())
        {
            redirect('/');
        }
    }
    public function delete($id)
    {
        if($this->user_model->delete($id))
        {
            redirect('/');
        }
    }
    public function edit($id)
    {
        $data['post']=$this->user_model->get_post($id);
        $this->load->view('Layout/header');
        $this->load->view('Pages/post_update',$data);
        $this->load->view('Layout/sidebar');
        $this->load->view('Layout/footer');
    }
    public function update()
    {
        if($this->user_model->post())
        {
            redirect('/');
        }
    }

}
?>
