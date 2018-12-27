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
                                <li class="breadcrumb-item active" aria-current="page">Laporan Data Pembelian</li>
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
                                    <div class="custom-title">Laporan Data Pembelian</div>
                                </div>
                            </div>
                            <div class="card-body- pt-3 pb-4">
                                <div class="table-responsive">
                                 <div class="col-xl-8">
                                <form method="post" action="?page=lap_pembelian2">
                                <input type="text" name="tgl1" class="col-xl-4 date-picker-input" value="Select Date">
                                        s/d
                                 <input type="text" name="tgl2" class="col-xl-4 date-picker-input" value="Select Date">
                                 <button type="submit" class="btn btn-dark btn-sm form-pill" value="cari">Cari</button>
                                  </form>
                                  </div>
                                  <?php 
								  $tgl1=$_POST['tgl1'];
								  $tgl2=$_POST['tgl2'];
								  ?>
                                  <span style="text-align:center"><h5> Laporan Pencarian Data Pembelian Dari Tanggal <?php echo $tgl1;?> s/d <?php echo $tgl2;?></h5></span>
                                    <table class="table" cellspacing="0">
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
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
										$a=mysqli_query($koneksi, "SELECT * FROM pembelian where tgl between '$tgl1' AND '$tgl2'");
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
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
<div class="text-center"><a target="_blank" href="?page=cetak_pembelian&d1=<?php echo $tgl1; ?>&d2=<?php echo $tgl2; ?>"><i class="fa fa-print"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
