<?php
class Patients extends CI_Controller {

  public function __construct()
  {
        parent::__construct();
        $this->load->model('patients_model');
        $this->load->helper('url_helper')
  }

  

  // method to view all news items 