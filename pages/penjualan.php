 <!--main content wrapper-->
        <div class="content-wrapper">

            <div class="container-fluid">

                <!--page title-->
                <div class="page-title mb-4 d-flex align-items-center">
                    <div class="mr-auto">
                        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Penjualan</h4>
                        <nav aria-label="breadcrumb" class="d-inline-block ">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Penjualan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--/page title-->
                
                <?php 
				$x=mysqli_query($koneksi,"SELECT id_parent FROM penjualan order by id DESC LIMIT 1");
				$y=mysqli_fetch_array($x);
				$idmax=$y['id_parent']+1;
				?>
                
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-primary">
                                    <div class="custom-title">Entry Penjualan</div>
                                </div>
                            </div>
                            <div class="card-body">
                             <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Penjualan</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kode" value="<?php echo $idmax. date("dmY");?>">
                                    </div>
                                </div>
                                
                            <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                            <input style="display:none" type="text" class="form-control" value="<?php echo date("d-m-Y");?>"><?php echo date("d-m-Y");?>
                            </div></div>
                            
                            <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Pembeli</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_pembeli" value="<?php if(!$nama_pembeli){} else { echo $nama_pembeli; }?>">
                            </div></div>

                             <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Barang</label>
                            <div class="col-sm-9">
                                                <select class="form-control" name="jenis_barang" id="option_s1">
                                                <option value="Bahan">Bahan</option>
                                                <option value="Barang">Barang</option>
                                                <option value="Jasa">Jasa</option>
                                                </select>
                                 </div></div>

                               
                                
                                <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Barang/Jasa</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_barang">
                                    </div>
                                </div>


                                <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">PxL(cm)-waktu(menit)</label>
                            <div class="col-sm-3">
                                    <input type="text" class="form-control" name="p">
                                    </div>
                                     <div class="col-sm-3">
                                    <input type="text" class="form-control" name="l">
                                    </div>
                                     <div class="col-sm-3">
                                    <input type="text" class="form-control" name="w">
                                    </div>
                                </div>
                                <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Qty</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" name="qty">
                                    </div>
                                </div>
                                <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" name="harga">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                
                                 <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">E/G</label>
                            <div class="col-sm-9">
                                    <input type="checkbox" name="e/g">
                                    </div>
                                </div>
                                <div class="text-center">
                                                <button type="submit" class="btn btn-purple">Submit</button>
                                            </div>
                                            
                            </div>
                        </div>
                
                
                
                       

                    </div>
                
                
                
                <div class="col-xl-6 col-md-6">

                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-warning">
                                    <div class="custom-title">Daftar Penjualan</div>
                                </div>
                            </div>
                            <div class="card-body">
                                 <div class="form-group">
                                                <label for="exampleInputEmail1">Total</label>
                                                <textarea cols="20" rows="3" class="form-control">0</textarea>
                                            </div>

                                <div class="input-group">
 <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>                                   
                                </div>
                                    <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Sub Total</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                    <div class="form-group row">
                             <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Uang</label>
                            <div class="col-sm-9">
                                    <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                
                                 <div class="text-center">
                                                <button type="submit" class="btn btn-purple">Submit</button>
                                            </div>
                                
                            </div>
                        </div>

                
                </div></div>