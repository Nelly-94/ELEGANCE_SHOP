<?php 
/**
 * 
 */
class CPedidos extends CI_Controller
{
    function _construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('ventas/pedidos');
    }
    public function grardar(){
        echo "Entro al metodo guardar";
    }
}


?>