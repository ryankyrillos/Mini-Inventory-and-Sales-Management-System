<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Test extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }


  public function index()
  {
    echo password_hash("123456", PASSWORD_BCRYPT);
  }

  public function newhex()
  {
    echo md5(time());
  }


  public function a()
  {
    $this->load->view('test');
  }
}