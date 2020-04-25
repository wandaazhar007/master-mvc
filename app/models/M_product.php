<?php 
    class M_product {
        private $table = 'product';
        private $table2 = 'mahasiswa';
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllProduct() {
            $this->db->query("SELECT * FROM " . $this->table);
            return $this->db->resultSet();
        }
        
        public function getProductById($idproduct) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idproduct=:idproduct');
            $this->db->bind('idproduct', $idproduct);
            return $this->db->single();
        }
        public function insertProduct($data) {
            $query = "INSERT INTO mahasiswa VALUES ('', :nama, :nrp, :email, :jurusan)";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('nrp', $data['nrp']);
            $this->db->bind('jurusan', $data['jurusan']);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }