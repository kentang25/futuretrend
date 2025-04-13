<?php

    Class M_cart extends CI_Model{
        public function find($id_brg){
            $result = $this->db->where('id_barang', $id_brg)
                            ->limit(1)
                            ->get('tb_data_barang');
            return $result->num_rows() > 0 ? $result->row() : null;
        }
        

        public function insert_data_cart($data)
        {
            $query = $this->db->insert('tb_cart',$data);
            return $query;
        }

        public function tampil_cart($id_user)
        {
            $query = $this->db->where('id_user',$id_user)
                              ->get('tb_cart');
            return $query;                                
        }
    }

?>