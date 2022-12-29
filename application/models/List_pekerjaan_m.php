<?php
class List_pekerjaan_m extends CI_Model {

        public function get_all()
        {
                $query = $this->db->query("SELECT * FROM list_pekerjaan")->result();
                return $query;
        }
        public function get_id($id)
        {
                $query = $this->db->query("SELECT * FROM list_pekerjaan WHERE id = '$id'")->row();
                return $query;
        }

        public function save($input)
        {
                $query = $this->db->query("UPDATE list_pekerjaan SET 
                                                nama_les = '".$input['nama_les']."',
                                                durasi = '".$input['durasi']."',
                                                pengajar = '".$input['pengajar']."'
                        WHERE id = '".$input['id']."'");
                return $query;
        }
        public function delete($id)
        {
                $query = $this->db->query("DELETE FROM list_pekerjaan     
                        WHERE id = '$id'");

                return $query;
        }
         public function insert($input)
        {       
                $nama_les = $input['nama_les'];
                $durasi   = $input['durasi'];
                $pengajar = $input['pengajar'];

                $query = $this->db->query("INSERT INTO `lpkcec`.`list_pekerjaan` (`nama_les`, `durasi`, `pengajar`) VALUES ('$nama_les', '$durasi', '$pengajar')");

                return $query;
        }

      

}