<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model {

    public function cekdata()
    {
        $this->db->from('pemesan');
        $query = $this->db->get();
        return $query->result();
    }
    public function tampilmenu()
    {
        return $this->db->get('menu');
    }
    public function inpnama($data,$table)
    {
        
       $this->db->insert($table,$data);
        
    }

}

/* End of file ModelName.php */

?>