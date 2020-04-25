<?php 
    class Home extends WAZAPPController {

        public function index() {
            $data['title']      = 'Halaman Home';
            
            $this->view('templates/header', $data);
            $this->view('home/v_home');
            $this->view('templates/footer', $data);
        }
    }
?>