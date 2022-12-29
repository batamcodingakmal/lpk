<?php
class Pencari_kerja_m extends CI_Model {

        public function get_all()
        {
                $query = $this->db->query("SELECT * FROM pencari_kerja")->result();
                return $query;
        }

        public function get_id($id)
        {
                $query = $this->db->query("SELECT * FROM pencari_kerja WHERE id = '$id'")->row();
                return $query;
        }

        public function save($input)
        {
                $query = $this->db->query("UPDATE pencari_kerja SET 
                                                firstname = '".$input['firstname']."',
                                                lastname = '".$input['lastname']."',
                                                email = '".$input['email']."'
                        WHERE id = '".$input['id']."'");
                return $query;
        }

                public function delete($id)
        {
                $query = $this->db->query("DELETE FROM pencari_kerja WHERE id = '$id'");
                return $query;
        }
         public function insert($input)
        {       
                $firstname = $input['firstname'];
                $lastname   = $input['lastname'];
                $email = $input['email'];

                $query = $this->db->query("INSERT INTO `lpkcec`.`pencari_kerja` (`firstname`, `lastname`, `email`) VALUES ('$firstname', '$lastname', '$email')");

                return $query;
        }

}