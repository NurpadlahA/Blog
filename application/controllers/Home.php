<?php 
class Home extends CI_Controller{
    public function index(){
        // merender method atau properti yang ada didalam object views
        $this->load->view('home/index');
    }
}
?>