<?php 
    class About extends AZAPPController {


        public function index() {
            $data['title']      = 'Halaman Page';
            $this->view('templates/core', $data);
        }
        public function page() {
            echo 'Halaman Page';
        }
    }
?>