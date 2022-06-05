<?php

class Model_kategori extends CI_Model{

    public function data_sayur(){
        return $this->db->get_where("table_topekas",array('
        kategori' => 'sayur'));
    }

    public function data_daging(){
        return $this->db->get_where("table_topekas",array('
        kategori' => 'daging'));
    }
}