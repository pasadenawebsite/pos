 <!--main content wrapper-->
        <div class="content-wrapper">

            <div class="container-fluid">

                <!--page title-->
                <div class="page-title mb-4 d-flex align-items-center">
                    <div class="mr-auto">
                        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Data Penjualan</h4>
                        <nav aria-label="breadcrumb" class="d-inline-block ">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Penjualan</li>
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
                                    <div class="custom-title">Data Penjualan</div>
                                </div>
                            </div>
                            <div class="card-body- pt-3 pb-4">
                                <div class="table-responsive">
                                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>No Nota</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pembeli</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Jual</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                             <th>No Nota</th>
                                            <th>Tanggal</th>
                                            <th>Nama Pembeli</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Jual</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
										$a=mysqli_query($koneksi, "SELECT * FROM penjualan order by id DESC");
										while($b=mysqli_fetch_array($a)){
										?>
                                        <tr>
                                        <td><?php echo $no_nota;?></td>
                                        <td><?php echo $tgl;?></td>
                                        <td><?php echo $nama_pembeli;?></td>
                                        <td><?php echo $kode_barang;?></td>
                                        <td><?php echo $nama_barang;?></td>
                                        <td><?php echo $harga_jual;?></td>
                                        <td><?php echo $qty;?></td>
                                        <td><?php echo $sub_total;?></td>
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
