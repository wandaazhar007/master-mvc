<?php 
class Product extends AZAPPController {

    
    public function index(){
        $data['title']      = 'Product';
        $data['product']    = $this->model('M_product')->getAllProduct();

        $this->view('templates/header', $data);
        $this->view('product/v_product', $data);
        $this->view('templates/footer', $data);
    }
    
    public function detail($idproduct){
        $data['title']              = 'Detail Product';
        $data['detail_product']     = $this->model('M_product')->getProductById($idproduct);

        $this->view('templates/header', $data);
        $this->view('product/v_detail', $data);
        $this->view('templates/footer');
    }
    public function insert() {
        if($this->model('M_product')->insertProduct($_POST) > 0) {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: http://localhost/master-mvc/public/product');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: http://localhost/master-mvc/public/product');
            exit;
        }
    }
}