<?php 
class Admin extends CI_Controller
{
    public  function index()
    {
        $this->load->library('form_validation');
         $this->form_validation->set_rules('username','UserName','required|alpha');
         $this->form_validation->set_rules('password','Password','required|max_length[12]');
         $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
      if($this->form_validation->run())
     {
            $uname=$this->input->post('username');
            $pass=$this->input->post('password');
            $this->load->model('loginmodel');
            $login_id=$this->loginmodel->isvalidate($uname,$pass);
            if($login_id)
            {
                // $this->load->library('session');
                $this->session->set_userdata('id',$login_id);
                return redirect('admin/welcome');
            }
            else {
               echo "Detail not matched";
            }
   
    }
         else{
            $this->load->view('admin/login');
         }
    }
    public function welcome()
    {
        $this->load->model('loginmodel','ar');
        $articles=$this->ar->articlelist();
        $this->load->view('admin/dashboard',['articles'=>$articles]);
    }
}
?>