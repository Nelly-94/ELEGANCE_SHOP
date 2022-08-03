<?php
/**
 * 
 */
class CChicas extends CI_Controller
{
    function _contruct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('chicas');
    }
}
?>