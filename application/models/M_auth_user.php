<?php

    Class M_auth_user extends CI_Model{

        public function insert_data_user()
        {
            $username   = $this->input->post('username');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');

                $data = array(
                    'username'  => $username,
                    'email'     => $email,
                    'password'  => $password
                );

            $this->db->insert('tb_auth_user');
        }

    }

?>