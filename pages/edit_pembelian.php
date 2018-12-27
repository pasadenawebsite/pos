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
											
											$id=$_POST['id'];

$insert=mysqli_query($koneksi,"UPDATE pembelian SET tgl='$tgl', toko='$toko', kode_barang='$kode_barang', nama_barang='$nama_barang', qty='$qty', harga_barang='$harga_barang', jumlah='$jumlah', jenis_barang='$jenis_barang' where id='$id'");

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
												$edit=$_GET['edit'];
												$a=mysqli_query($koneksi,"SELECT * FROM pembelian where id='$edit'");
												$db=mysqli_fetch_array($a);
											?>

                            <div class="card-body">
                                <div class="card-body">
                                    <form class="picker-form" method="post">
                                       <div class="form-group row">
                                         <label class="col-sm-4 col-form-label col-form-label-sm">Tanggal</label>
											<div class="col-sm-4">
                                            <input type="text" style="display:none" name="id" class="form-control date-picker-input" value="<?php echo $db['id'];?>">
                                            <input type="text" name="tgl" class="form-control date-picker-input" value="<?php echo $db['tgl'];?>">

                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Jenis Barang</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="jenis_barang" id="option_s1">
                                                <option value="<?php echo $db['jenis_barang'];?>" selected="selected"><?php echo $db['jenis_barang'];?></option>
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
                                                <input type="text" class="form-control" name="toko" value="<?php echo $db['toko'];?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Kode</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="kode_barang" value="<?php echo $db['kode_barang'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Nama Barang</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nama_barang" value="<?php echo $db['nama_barang'];?>">
                                            </div>
                                        </div>
 										<div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Qty</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="qty" value="<?php echo $db['qty'];?>">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Harga</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="harga_barang" value="<?php echo $db['harga_barang'];?>">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Jumlah</label>
                                            <div class="col-sm-4">
                                            <input type="text" class="form-control" name="jumlah"  value="<?php echo $db['jumlah'];?>">
                                            </div>
                                        </div>
                                         <div class="text-center">
                                                <button type="submit" class="btn btn-purple" name="submit" id="submit">Submit</button>
                                          <a href="?page=data_pembelian"><button type="button" class="btn btn-purple" name="button" id="button">Kembali</button></a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   