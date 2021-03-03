<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
    // function Hello()
    // {
    //     parent::Controller();
    // }
    function index()
    {
        $this->load->view('hello_message');
    } 
} 
/* End of file hello.php */ 
/* Location: ./system/application/controllers/hello.php */ 
?>