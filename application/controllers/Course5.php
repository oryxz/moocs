<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course5 extends CI_Controller {

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
    $this->load->view('course5/list');
    $this->load->view('footer');
  }
  public function overview()
  {
    $this->load->view('header');
    $this->load->view('course5/course_overview');
    $this->load->view('footer');
  }
  public function classes()
  {
    $this->load->view('header');
    $this->load->view('course5/course_classes');
    $this->load->view('footer');
  }
  public function discussion()
  {
    $this->load->view('header');
    $this->load->view('course5/course_discussion');
    $this->load->view('footer');
  }
}
