<?php 
class Admin extends CI_Controller
{
    public  function index()
    {
        
        // $this->load->library('form_validation');
        //  $this->form_validation->set_rules('username','UserName','required|alpha');
//         $this->form_validation->set_rules('password','Password','required|max_length[12]');
//          $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
//       if($this->form_validation->run())
//      {
//             $uname=$this->input->post('username');
//             $pass=$this->input->post('password');
//             $this->load->model('loginmodel');
//             $login_id=$this->loginmodel->isvalidate($uname,$pass);
//             if($login_id)
//             {
//                 // $this->load->library('session');
//                 $this->session->set_userdata('id',$login_id);
//                 return redirect('admin/welcome');
//             }
//             else {
                
//             }
//     }
//          else{
//             $this->load->view('admin/login');
       }
  //   }
     public function welcome()
    {
        $this->load->model('loginmodel','ar');
        $articles=$this->ar->articlelist();
       $this->load->view('admin/dashboard',['articles'=>$articles]);
     }
    public function register()
    {
         $this->load->view('admin/register');
     }
  //   public function sendmail()
     //{
     //   $this->form_validation->set_rules('username','UserName','required|alpha');
     //    $this->form_validation->set_rules('password','Password','required|max_length[12]');
     //   $this->form_validation->set_rules('firstname','First Name','required|alpha');
     //   $this->form_validation->set_rules('lastname','Last Name','required|max_length[12]');
     //   $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email');
     //   $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
    //     if($this->form_validation->run())
//  {
//      $this->load->library('email');
//      $this->email->from(set_value('email'),set_value('firstname'));
//      $this->email->to("vaishalivk48@gmail.com");
//      $this->email->subject("hello");
//      $this->email->message("thankyou");
//     $this->email->set_newline("\e\n");
//     $this->email->sent();
//  if(!$this->email->sent())
// {
//      show_error($this->email->print_debugger());
//  }
//  else{
//      echo "your email has been sent";
//  }
//  }

//  }
 }
?>