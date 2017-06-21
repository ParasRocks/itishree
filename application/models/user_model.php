<?php
class User_model extends Ci_model
{
    public function __construct()
    {

    }
    public function register()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'mobile'=>$this->input->post('mobile')
        );
        if($this->db->insert('users',$data))
        {
            $this->session->set_userdata($data);
            $query=$this->db->get_where('users',array('username'=>$this->input->post('username')));
            $data=$query->first_row();
            $id=$data->id;
            $this->session->set_userdata(array('user_id'=>$id));
            return true;
        }

    }
    public function login()
    {
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password'))
        );
        $query=$this->db->get_where('users',$data);

        if($data=$query->first_row()  )
        {
            $id=$data->id;
            $username=$data->username;
            $this->session->set_userdata(array('user_id'=>$id,'username'=>$username));
            return true;
        }
        else{
            return false;
        }
    }
    public function post()
    {
        $data=array(
            'user_id'=>$this->input->post('user_id'),
            'title'=>$this->input->post('title'),
            'author'=>$this->input->post('author'),
            'category'=>$this->input->post('categories'),
            'description'=>$this->input->post('description')
        );
        if($this->db->insert('posts',$data))
        {
            return('/');
        }
    }
    public function get_post($slug=null)
    {
        if($slug==null)
        {
            $query=$this->db->get('posts');
            return $query->result_array();
        }
        else{
            $query=$this->db->get_where('posts',array('post_id'=>$slug));
            return $query->first_row();
        }
    }
    public function delete($id)
    {
        if($this->db->delete('posts',array('post_id'=>$id)))
        {
            return true;
        }
    }
}
?>
