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
                    <td>Nama Barang</td>
                    <td>Kategori</td>
                    <td>Harga</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <?php
                $no = 0;
                foreach($barang as $key => $d_brg) :
            ?>
            <tbody>
                <tr>
                    <td><?= $no=+1 ?></td>
                    <td><?= $d_brg->nama_brg?></td>
                    <td><?= $d_brg->kategori?></td>
                    <td><?= $d_brg->harga?></td>
                    <td>
                    <?= anchor('admin_future/data_barang/detail/'. $d_brg->id_barang,'<div class="btn btn-sm btn-info"><i class="fa fa-search"></i></div>') ?>
                    <?= anchor('admin_future/data_barang/edit/'. $d_brg->id_barang,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?>
                    <?= anchor('admin_future/data_barang/delete/'. $d_brg->id_barang,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
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

	        <?= form_open_multipart('admin_future/data_barang/insert'); ?>
	        	<div class="form-group">
	        		<label>Nama Barang</label>
	        		<input type="text" name="nama_brg" class="form-control">
	        	</div>
				<div class="form-group">
	        		<label>Kategori</label>
	        		<select class="form-control" name="kategori">
						<option>Gelang</option>
	        			<option>Kalung</option>
						<option>Cincin</option>
						<option>Aksesoris</option>	        			
	        		</select>
	        	</div>
	        	<div class="form-group">
	        		<label>Harga</label>
	        		<input type="text" name="harga" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Stok</label>
	        		<input type="text" name="stok" class="form-control">
	        	</div>
	        	<div class="form-group">
	        		<label>Gambar Produk</label>
	        		<input type="file" name="gambar" class="form-control">
	        	</div>

		        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
	        <?= form_close(); ?>
	      </div>
	    </div>
	  </div>
	</div>

</div>