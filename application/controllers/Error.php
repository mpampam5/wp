<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function error404()
  {
    $this->load->view('errors/error404');
  }

}
