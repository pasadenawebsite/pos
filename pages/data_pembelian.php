 <!--main content wrapper-->
        <div class="content-wrapper">

            <div class="container-fluid">

                <!--page title-->
                <div class="page-title mb-4 d-flex align-items-center">
                    <div class="mr-auto">
                        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Pembelian</h4>
                        <nav aria-label="breadcrumb" class="d-inline-block ">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pembelian</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--/page title-->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-primary">
                                    <div class="custom-title">Entry Pembelian</div>
                                </div>
                            </div>
<?php 
											if (isset($_GET['hapus'])) {
											$id_hapus=$_GET['hapus'];
											$ex=mysqli_query($koneksi,"DELETE FROM pembelian WHERE id='$id_hapus'");
											if($ex){
												?>
												<div  class="alert alert-success alert-dismissable">
	                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<strong>Selamat!</strong> Data Sukses Di Hapus.
											</div>
											<?php	} }
											if (isset($_POST['submit'])){
							                            
											$tgl=$_POST['tgl'];
											$toko=$_POST['toko'];
											$kode_barang=$_POST['kode_barang'];
											$nama_barang=$_POST['nama_barang'];
											$qty=$_POST['qty'];
											$harga_barang=$_POST['harga_barang'];
											$jumlah=$_POST['jumlah'];
											$jenis_barang=$_POST['jenis_barang'];

$insert=mysqli_query($koneksi,"INSERT INTO pembelian SET tgl='$tgl', toko='$toko', kode_barang='$kode_barang', nama_barang='$nama_barang', qty='$qty', harga_barang='$harga_barang', jumlah='$jumlah', jenis_barang='$jenis_barang'");

										if($insert){
												?>
												<div class="alert alert-success alert-dismissable">
	                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<strong>Selamat!</strong> Data Sukses Di Simpan.
											</div>
											<?php	}
											else {?>
												<div class="alert alert-danger alert-dismissable">
	                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<strong>Maaf!</strong> Data Gagal Di Simpan.
											</div>
                                                <?php
												}
												}
											?>

                            <div class="card-body">
                                <div class="card-body">
                                    <form class="picker-form" method="post">
                                       <div class="form-group row">
                                         <label class="col-sm-4 col-form-label col-form-label-sm">Tanggal</label>
											<div class="col-sm-4">
                                            <input type="text" name="tgl" class="form-control date-picker-input" value="Select Date">
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Jenis Barang</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="jenis_barang" id="option_s1">
                                                    <option value="Bahan">
                                                        Bahan
                                                    </option>
                                                    <option value="Matrial">
                                                        Matrial
                                                    </option>
                                                    <option value="Barang1">
                                                        Barang 1
                                                    </option>
                                                    <option value="Triplek">
                                                        Triplek
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Supplier/Toko</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="toko">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Kode</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="kode_barang">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Nama Barang</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nama_barang">
                                            </div>
                                        </div>
 										<div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Qty</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="qty">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Harga</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="harga_barang">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Jumlah</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="jumlah">
                                            </div>
                                        </div>
                                         <div class="text-center">
                                                <button type="submit" class="btn btn-purple" name="submit" id="submit">Submit</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   <br /><br />
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-primary">
                                    <div class="custom-title">Data Pembelian</div>
                                </div>
                            </div>
                            <div class="card-body- pt-3 pb-4">
                                <div class="table-responsive">
                                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                        <thead>
                                        <tr>
                                        <th>Tanggal</th>
                                     <th>Toko</th>
                                     <th>Jenis Barang</th>
                                     <th>Kode Barang</th>
                                     <th>Nama Barang</th>
                                     <th>Qty</th>
                                     <th>Harga Barang</th>
                                     <th>Jumlah</th>
                                     <th>Option</th>

                                           
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                     <th>Tanggal</th>
                                     <th>Toko</th>
                                     <th>Jenis Barang</th>
                                     <th>Kode Barang</th>
                                     <th>Nama Barang</th>
                                     <th>Qty</th>
                                     <th>Harga Barang</th>
                                     <th>Jumlah</th>
                                     <th>Option</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
										$a=mysqli_query($koneksi, "SELECT * FROM pembelian order by id DESC");
										while($db=mysqli_fetch_array($a)){
										?>
                                        <tr>
                                            <td><?php echo $db['tgl'];?></td>
                                            <td><?php echo $db['toko'];?></td>
                                            <td><?php echo $db['jenis_barang'];?></td>
                                            <td><?php echo $db['kode_barang'];?></td>
                                            <td><?php echo $db['nama_barang'];?></td>
                                            <td><?php echo $db['qty'];?></td>
                                            <td><?php echo $db['harga_barang'];?></td>
                                            <td><?php echo $db['jumlah'];?></td>
                                            <td><a href="?page=edit_pembelian&edit=<?php echo $db['id']; ?>"><i class="fa fa-pencil"></i></a>             
											<a href="?page=data_pembelian&hapus=<?php echo $db['id']; ?>"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
