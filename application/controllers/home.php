<?php
class home extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Home";
        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}