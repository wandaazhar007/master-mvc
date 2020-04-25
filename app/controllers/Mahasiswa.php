<?php 
    class Mahasiswa extends AZAPPController {

        public function index() {
            $data['title']          = 'Mahasiswa';
            $data['mahasiswa']      = $this->model('M_mahasiswa')->getAll();

            $this->view('templates/header', $data);
            $this->view('mahasiswa/v_mahasiswa', $data);
            $this->view('templates/footer');
        }

        public function detail($id) {
            $data['title']      = 'Detail Mahasiswa';
            $data['detailMahasiswa']    = $this->model('M_mahasiswa')->getById($id);

            $this->view('templates/header', $data);
            $this->view('mahasiswa/v_detail', $data);
            $this->view('templates/footer');
        }

        public function insert() {
            if($this->model('M_mahasiswa')->insertMahasiswa($_POST) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: http://localhost/master-mvc/public/mahasiswa');
                exit;
            } 
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: http://localhost/master-mvc/public/mahasiswa');
                exit;
        }

        public function delete($id) {

            $query = $this->model('M_mahasiswa')->hapusMahasiswa($id);
            if($query > 0) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: http://localhost/master-mvc/public/mahasiswa');
                exit;
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: http://localhost/master-mvc/public/mahasiswa');
                exit;
            }

            // if($this->model('M_mahasiswa')->hapusMahasiswa($id) > 0) {
            //     Flasher::setFlash('berhasil', 'dihapus', 'success');
            //     header('Location: http://localhost/master-mvc/public/mahasiswa');
            //     exit;
            // } 
            //     Flasher::setFlash('gagal', 'dihapus', 'danger');
            //     header('Location: http://localhost/master-mvc/public/mahasiswa');
            //     exit;
        }

        
    }