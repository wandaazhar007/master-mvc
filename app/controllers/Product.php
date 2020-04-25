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
        // ob_start();
        if($this->model('M_product')->insertProduct($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            // ob_start();
            header('Location: http://localhost/master-mvc/public/product');
            // echo "<script type='text/javascript'>window.location.href = 'http://localhost/master-mvc/public/product';</script>";
            // echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://localhost/master-mvc/public/product">';
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: http://localhost/master-mvc/public/product');
            exit;
        }
    }
}