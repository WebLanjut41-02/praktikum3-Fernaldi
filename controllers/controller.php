<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper(array('url','form'));
        $this->load->model('m_data');

    }
    

    public function index()
    {
       $this->load->view('v_nama');
    }
    public function inlogin()
    {
        $nama = $this->input->post('nama');
        $data['Nama_Pemesan']= $nama;
        $this->m_data->inpnama($data,'pemesan');
        redirect('controller/innama');
        
    }

    public function innama()
    {
        $data['value'] = $this->m_data->tampilmenu()->result();
        $this->load->view('halamanmenu',$data);
    }
        
    
}

/* End of file Controllername.php */

?>