	<div class="row mt-5">
		<div class="col-md-12">
			<div class="table-responsive">
			<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Produk</button>
			<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#mahasiswaModal">Tambah Mahasiswa</button>

			<div class="row">
				<div class="col-md-12">
				<?php Flasher::flash() ; ?>
				</div>
			</div>

			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>ID Transaksi</th>
						<th>ID Barang</th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Stock</th>			
						<th>Aksi</th>		
					</tr>
				</thead>
				<tbody id="tempat_data">
				<?php foreach($data['product'] as $i): ?>
					<tr>
						<td><?php echo $i['idproduct'] ?></td>
						<td><?php echo $i['barcode'] ?></td>
						<td><?php echo $i['name'] ?></td>
						<td><?php echo $i['price'] ?></td>
						<td><?php echo $i['stock'] ?></td>
						<td>
                        <a href="http://localhost/master-mvc/public/product/detail/<?php echo $i['idproduct']?>" class="badge badge-info">Edit</a>
                        <a href="#" class="badge badge-danger">Delete</a>
                        </td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>

	<!-- Modal Form Input -->
	<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
		<form action="http://localhost/master-mvc/public/product/insert" method="post">
			<div class="form-group row" style="width: 700px;">
				<label for="name" class="col-sm-3 col-form-label">Nama Produk</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="nama" name="nama">
				</div>
			</div>
			<div class="form-group row" style="width: 700px;">
				<label for="name" class="col-sm-3 col-form-label">ID Produk</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="barcode" name="barcode">
				</div>
			</div>
			<div class="form-group row" style="width: 700px;">
				<label for="name" class="col-sm-3 col-form-label">Harga Produk</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="price" name="price">
				</div>
			</div>
			<div class="form-group row" style="width: 700px;">
				<label for="name" class="col-sm-3 col-form-label">Stock Produk</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="stock" name="stock">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
			</div>
		</div>
	</div>
	</div> -->
	
	
	<div class="modal fade" id="mahasiswaModal" tabindex="-1" role="dialog" aria-labelledby="mahasiswaModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="mahasiswaModalLabel">Tambah Mahasiswa</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
		<form action="http://localhost/master-mvc/public/product/insert" method="post">
			<div class="form-group row" style="width: 700px;">
				<label for="nama" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="nama" name="nama">
				</div>
			</div>
			<div class="form-group row" style="width: 700px;">
				<label for="nrp" class="col-sm-3 col-form-label">NRP</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="nrp" name="nrp">
				</div>
			</div>
			<div class="form-group row" style="width: 700px;">
				<label for="email" class="col-sm-3 col-form-label">Email</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="email" name="email">
				</div>
			</div>
			<div class="form-group row" style="width: 700px;">
				<label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
				<div class="col-sm-4">
				<input type="text" class="form-control" id="jurusan" name="jurusan">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
			</div>
		</div>
	</div>
	</div>
	<!-- Akhir Modal Form Input -->