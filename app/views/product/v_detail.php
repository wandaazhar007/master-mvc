<div class="kotak-form-edit">
    <form action="#" method="post">
        <div class="form-group row" style="width: 700px;">
            <label for="name" class="col-sm-3 col-form-label">Nama Produk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['detail_product']['name'] ;?>">
            </div>
        </div>
        <div class="form-group row" style="width: 700px;">
            <label for="name" class="col-sm-3 col-form-label">ID Produk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['detail_product']['barcode'] ;?>">
            </div>
        </div>
        <div class="form-group row" style="width: 700px;">
            <label for="name" class="col-sm-3 col-form-label">Harga Produk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['detail_product']['price'] ;?>">
            </div>
        </div>
        <div class="form-group row" style="width: 700px;">
            <label for="name" class="col-sm-3 col-form-label">Stock Produk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $data['detail_product']['stock'] ;?>">
            <button type="submit" class="btn btn-primary mt-3 ml-auto">Simpan</button>
            <input type="button" class="btn btn-danger mt-3 ml-auto" onclick="history.back()" value="Kembali">
            </div>
        </div>
        
                
    </form>
</div>