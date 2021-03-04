<?php
class Patients extends CI_Controller {

  public function __construct()
  {
        parent::__construct();
        $this->load->model('patients_model');
        $this->load->helper('url_helper');
  }

// method to view all news items 
public function index()
{
  {
    $data['patients'] = $this->patients_model->get_patients();
    $data['title'] = 'SHOW ALL PATIENTS';
var_dump($data);
    $this->load->view('templates/headerHosp', $data);
    $this->load->view('patients/index', $data);
    $this->load->view('templates/footer');
}
}
// one for a specific news item
public function view_1Patient($phone = NULL)
{
$data['patients_item'] = $this->patients_model->get_patients($phone);

if (empty($data['patients_item']))
{
        show_404();
}

// $data['title'] = $data['patients_item']['title'] .'dans Patients.php by VB';
//$data['title'] = $data['patients_item']['phone'] .'dans Patients.php by VB';
$data['title'] = ' Patients by Phone';
$this->load->view('templates/headerHosp', $data);
$this->load->view('patients/view', $data);
$this->load->view('templates/footer');
}

//vérifier si le formulaire a été soumis et si les données soumises ont passé les règles de validation.<?php
public function create()
{
$this->load->helper('form');
$this->load->library('form_validation');

$data['title'] = 'Create a new patient';
// 2eme terme pour msg d erreur 
$this->form_validation->set_rules('firstname', 'Prénom', 'required');
$this->form_validation->set_rules('lastname', 'Nom', 'required');
$this->form_validation->set_rules('phone', 'Tel', 'required');
$this->form_validation->set_rules('mail', 'eMail', 'required');
$this->form_validation->set_rules('birthdate', 'Date naissance', 'required');

if ($this->form_validation->run() === FALSE)
{
$this->load->view('templates/headerHosp', $data);
$this->load->view('patients/create');
$this->load->view('templates/footer');

}
else
{
$this->patients_model->set_patient();
$this->load->view('patients/success');

}
}
}