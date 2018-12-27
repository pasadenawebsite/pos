 <!--main content wrapper-->
        <div class="content-wrapper">

            <div class="container-fluid">

                <!--page title-->
                <div class="page-title mb-4 d-flex align-items-center">
                    <div class="mr-auto">
                        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Barang & Jasa</h4>
                        <nav aria-label="breadcrumb" class="d-inline-block ">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Barang & Jasa</li>
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
                                    <div class="custom-title">Entry Bahan</div>
                                </div>
                            </div>
                             <?php 
											if (isset($_GET['hapus'])) {
											$id_hapus=$_GET['hapus'];
											$ex=mysqli_query($koneksi,"DELETE FROM barang WHERE id='$id_hapus'");
											if($ex){
												?>
												<div  class="alert alert-success alert-dismissable">
	                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<strong>Selamat!</strong> Data Sukses Di Hapus.
											</div>
											<?php	} }
											if (isset($_POST['submit'])){
													$kode_barang=$_POST['kode_barang'];
													$nama_barang=$_POST['nama_barang'];
													$harga_beli=str_replace(",","",$_POST['harga_beli']);
													$harga_jual=str_replace(",","",$_POST['harga_jual']);

													
$insert=mysqli_query($koneksi,"INSERT INTO barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', harga_beli='$harga_beli', harga_jual='$harga_jual'");

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
                                         <label class="col-sm-4 col-form-label col-form-label-sm">Kode Barang/Jasa</label>
											<div class="col-sm-4">
                                            <input type="text" name="kode_barang" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         <label class="col-sm-4 col-form-label col-form-label-sm">Nama Barang/Jasa</label>
											<div class="col-sm-4">
                                            <input type="text" name="nama_barang" class="form-control">
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Harga Beli</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="harga_beli" onkeyup="formatNumber(this);" onchange="formatNumber(this);" onclick="formatNumber(this);" onkeypress="formatNumber(this);">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Harga Jual</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="harga_jual" onkeyup="formatNumber(this);" onchange="formatNumber(this);" onclick="formatNumber(this);" onkeypress="formatNumber(this);">
                                            </div>
                                        </div>

                                         <div class="text-center">
                                                <button type="submit" class="btn btn-purple" name="submit" value="submit" id="submit">Submit</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-primary">
                                    <div class="custom-title">Data Barang & Jasa</div>
                                </div>
                            </div>
                            <div class="card-body- pt-3 pb-4">
                                <div class="table-responsive">
                                    <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                        <thead>
                                        <tr>
                                       <th>kode barang</th>
                                        <th>nama barang</th>
                                        <th>harga beli</th>
                                       <th> harga jual</th>
                                       <th>Option</th> 
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                    	<th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Beli</th>
                                       <th> Harga Jual</th>
                                       <th>Option</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
										$a=mysqli_query($koneksi, "SELECT * FROM barang order by id DESC");
										while($db=mysqli_fetch_array($a)){
										?>
                                        <tr>
                                        <td><?php echo $db['kode_barang'];?></td>
                                         <td><?php echo $db['nama_barang'];?></td>
                                         <td><?php echo $db['harga_beli'];?></td>
                                         <td><?php echo $db['harga_jual'];?></td>
       <td><a href="?page=edit_barang&edit=<?php echo $db['id']; ?>"><i class="fa fa-pencil"></i></a>             
		<a href="?page=data_barang&hapus=<?php echo $db['id']; ?>"><i class="fa fa-trash-o"></i></a></td>
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
<script>
function formatNumber(input)
{
    var num = input.value.replace(/\,/g,'');
    if(!isNaN(num)){
    if(num.indexOf('.') > -1){
    num = num.split('.');
    num[0] = num[0].toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1,').split('').reverse().join('').replace(/^[\,]/,'');
    if(num[1].length > 2){
    alert('You may only enter two decimals!');
    num[1] = num[1].substring(0,num[1].length-1);
    } input.value = num[0]+'.'+num[1];
    } else{ input.value = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1,').split('').reverse().join('').replace(/^[\,]/,'') };
    }
    else{ alert('Anda hanya diperbolehkan memasukkan angka!');
    input.value = input.value.substring(0,input.value.length-1);
    }
}

</script>