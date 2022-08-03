<?php
/**
 * 
 **/
class CInicio extends CI_Controller
{
    function _construct()
    {
        parent:: __construct();
    }
    public function index(){
        $this->load->view('inicio');
    }
}
?>