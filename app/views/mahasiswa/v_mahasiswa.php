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
						<th>No</th>
						<th>Nama Mahasiswa</th>
						<th>NRP</th>
						<th>Email</th>
						<th>Jurusan</th>			
						<th>Aksi</th>		
					</tr>
				</thead>
				<tbody id="tempat_data">
				<?php foreach ($data['mahasiswa'] as $i): ?>
					<tr>
						<td><?php  ?></td>
						<td><?php echo $i['nama'] ?></td>
						<td><?php echo $i['nrp'] ?></td>
						<td><?php echo $i['email'] ?></td>
						<td><?php echo $i['jurusan'] ?></td>
						<td>
                        <a href="http://localhost/master-mvc/public/mahasiswa/detail/<?php echo $i['id']?>" class="badge badge-info">Detail</a>
                        <a href="http://localhost/master-mvc/public/mahasiswa/update/<?php echo $i['id']?>" class="badge badge-info tampilModalUbah" data-toggle="modal" data-target="#mahasiswaModal">Edit</a>
                        <a href="http://localhost/master-mvc/public/mahasiswa/delete/<?php echo $i['id']?>" class="badge badge-danger" onclick="return confirm('Apakah yakin ingin menghapus data ini ?')">Delete</a>
                        </td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>


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
		<form action="http://localhost/master-mvc/public/mahasiswa/insert" method="post">
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