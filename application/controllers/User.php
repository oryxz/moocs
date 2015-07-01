<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->view('header');
    $this->load->view('welcome_message');
    $this->load->view('footer');
  }
  public function reg_trainer(){
      if($this->input->post('submit')){
          $this->db->insert('users', array(
              'first_name' => $this->input->post('exampleInputFirstName'),
              'last_name' => $this->input->post('exampleInputLastName'),
              'email' => $this->input->post('exampleInputEmail1'),
              'password' => $this->input->post('exampleInputPassword1'),
              'user_type' => '2'
          ));
      }
    $this->load->view('header');
    $this->load->view('user/reg_trainer');
    $this->load->view('footer');
  }
  public function reg_trainee(){
    if($this->input->post('submit')){
          $this->db->insert('users', array(
              'first_name' => $this->input->post('exampleInputFirstName'),
              'last_name' => $this->input->post('exampleInputLastName'),
              'email' => $this->input->post('exampleInputEmail1'),
              'password' => $this->input->post('exampleInputPassword1'),
              'user_type' => '1'
          ));
      }
    $this->load->view('header');
    $this->load->view('user/reg_trainee');
    $this->load->view('footer');
  }
  public function sign_in(){
    $this->load->view('header');
    $this->load->view('user/sign_in');
    $this->load->view('footer');
  }
}
