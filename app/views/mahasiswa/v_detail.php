<div class="kotak-form-edit">
    <form action="#" method="post">
        <div class="form-group row" style="width: 700px;">
            <label for="nama" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['detailMahasiswa']['nama'] ;?>">
            </div>
        </div>
        <div class="form-group row" style="width: 700px;">
            <label for="nrp" class="col-sm-3 col-form-label">NRP</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo $data['detailMahasiswa']['nrp'] ;?>">
            </div>
        </div>
        <div class="form-group row" style="width: 700px;">
            <label for="email" class="col-sm-3 col-form-label">Harga Produk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['detailMahasiswa']['email'] ;?>">
            </div>
        </div>
        <div class="form-group row" style="width: 700px;">
            <label for="jurusan" class="col-sm-3 col-form-label">Stock Produk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $data['detailMahasiswa']['jurusan'] ;?>">
            <button type="submit" class="btn btn-primary mt-3 ml-auto">Simpan</button>
            <input type="button" class="btn btn-danger mt-3 ml-auto" onclick="history.back()" value="Kembali">
            </div>
        </div>
        
                
    </form>
</div>