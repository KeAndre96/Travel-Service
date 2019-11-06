<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('encryption');
    $this->load->model('register_model');
  }
	public function index()
	{
    $this->load->view("site/register");

	}
  function validation()
  {
    $this->form_validation->set_rules('user_name','Name','required|trim');
    $this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email|is_unique[myusers.email]');
    $this->form_validation->set_rules('user_password','Password','required|trim');
    if($this->form_validation->run())
    {
      $verificationKey= md5(rand());
      $encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
      $data = array('name' => $this->input->post('user_name'),'email' => $this->input->post('user_email'), 'password' => $encrypted_password, 'verificationKey' =>$verificationKey);
      $id = $this->register_model->insert($data);
      /*
      if ($id>0) {
        $subject = "Please verify email ... ";
        $message = "<p>Hi".$this->input->post('user_name'). "</p>
        <p>Verify email by clicking this...<a href='".base_url()."register/verify_email/".$verificationKey."'>Link<a/>.</p><p>More info</p>";
        $config=array('protocol'=>'smtp','smtp_host'=>'smtpout.secureserver.net','smtp_port'=>80,'smtp_username'=>'xxxxx', 'smtp_pass'=>'xx','mailtype'=>'html','charset'=>'iso-8859-1','wordwrap' => TRUE);
      }
      $this->load->library('email',$config);
      $this->email->set_newline("\r\n");
      $this->email->from('something@email.com');
      $this->email->to($this->post('user_email'));
      $this->email->subject($subject);
      $this->email->message($message);
      if($this->email->send())
      {
        $this->session->set_flashdata('message','Check in your email');
        redirect('register');
      }
      */
      redirect('');
    }
    else {
      $this->index();
    }
  }
}
