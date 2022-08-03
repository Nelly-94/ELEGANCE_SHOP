<?php
/**
 * 
 */
class CRegistro extends CI_Controller
{
    function _construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('Registro');
    }
}
?>