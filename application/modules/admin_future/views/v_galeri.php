<div class="container">
    <button class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#modal_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET">
        <div class="input-group">
            <input type="text" name="keyword" id="search-bar" class="form-control bg-light border-1 mb-4 small" placeholder="search for..." aria-label="search" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <button class="btn btn-primary mb-4" id="btn-search" type="button">
                        <i class="fas fa-search fa-sm "></i>
                    </button>
            </div>
        </div>
    </form>
    <div class="table-responsive d-none d-md-block">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Galeri</td>
                    <td>Gambar</td>
                    <td>Created_at</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            
            <tbody>
            <?php
                    $no = 0;
                    foreach ($galeri as $key => $glr) :
                ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $glr->nama_galeri ?></td>
                    <td><img src="<?= base_url(). 'assets/uploads/' . $glr->gambar ?>" width="100"></td>
                    <td><?= $glr->created_at ?></td>
                    <td>
                        <?= anchor('admin_future/upload_galeri/delete/'. $glr->id_galeri, 
                        '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA BARANG</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

	        <?= form_open_multipart('admin_future/upload_galeri/insert'); ?>
                <div class="form-group">
	        		<label>Nama Galeri</label>
	        		<input type="text" name="nama_galeri" class="form-control">
	        	</div>
                <div class="form-group">
	        		<label>Foto Galeri</label>
	        		<input type="file" name="galeri" class="form-control">
	        	</div>

		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
	        <?= form_close(); ?>
	      </div>
	    </div>
	  </div>
	</div>

</div>