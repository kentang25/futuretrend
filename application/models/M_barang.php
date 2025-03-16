<?php

    Class M_barang extends CI_model{
        public function tampil_data()
        {
            $query = $this->db->limit(3)->get('tb_data_barang');
            return $query;
        }
    }

?>