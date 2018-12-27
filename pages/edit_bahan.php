 <!--main content wrapper-->
        <div class="content-wrapper">

            <div class="container-fluid">

                <!--page title-->
                <div class="page-title mb-4 d-flex align-items-center">
                    <div class="mr-auto">
                        <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Bahan</h4>
                        <nav aria-label="breadcrumb" class="d-inline-block ">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Bahan</li>
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
											$ex=mysqli_query($koneksi,"DELETE FROM bahan WHERE id='$id_hapus'");
											if($ex){
												?>
												<div  class="alert alert-success alert-dismissable">
	                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
												<strong>Selamat!</strong> Data Sukses Di Hapus.
											</div>
											<?php	} }
											if (isset($_POST['submit'])){
													$kode_bahan=$_POST['kode_bahan'];
													$nama_bahan=$_POST['nama_bahan'];
													$lebar=$_POST['lebar'];
													$panjang=$_POST['panjang'];
													$harga_beli=str_replace(",","",$_POST['harga_beli']);
													$harga_beli_cm=str_replace(",","",$_POST['harga_beli_cm']);
													
													$id=$_POST['id'];		
$insert=mysqli_query($koneksi,"UPDATE bahan SET kode_bahan='$kode_bahan', nama_bahan='$nama_bahan', lebar='$lebar', panjang='$panjang', harga_beli='$harga_beli', harga_beli_cm='$harga_beli_cm' where id='$id'");

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
											$a=mysqli_query($koneksi, "SELECT * FROM bahan where id='$edit'");
											$db=mysqli_fetch_array($a);
											?>
                                            
										
                            <div class="card-body">
                                <div class="card-body">
                                    <form class="picker-form" method="post">
                                       <div class="form-group row">
                                         <label class="col-sm-4 col-form-label col-form-label-sm">Kode Akrilik</label>
											<div class="col-sm-4">
                                            <input type="text" name="id" style="display:none" class="form-control" value="<?php echo $db['id'];?>" required>
                                            <input type="text" name="kode_bahan" class="form-control" value="<?php echo $db['kode_bahan'];?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                         <label class="col-sm-4 col-form-label col-form-label-sm">Nama Bahan</label>
											<div class="col-sm-4">
                                            <input type="text" name="nama_bahan" class="form-control" value="<?php echo $db['nama_bahan'];?>"   required>
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Lebar x Panjang (cm)</label>
                                            <div class="col-sm-2">
                                             <input type="text" name="lebar" class="form-control"  value="<?php echo $db['lebar'];?>" >
                                               </div> X 
                                                <div class="col-sm-2">
                                             <input type="text" name="panjang" class="form-control"  value="<?php echo $db['panjang'];?>" >
                                               </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Harga/lbr</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="harga_beli" onkeyup="formatNumber(this);" onchange="formatNumber(this);" onclick="formatNumber(this);" onkeypress="formatNumber(this);"  value="<?php echo $db['harga_beli'];?>" >
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Harga Beli Cm</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control"  value="<?php echo $db['harga_beli_cm'];?>"  name="harga_beli_cm" onkeyup="formatNumber(this);" onchange="formatNumber(this);" onclick="formatNumber(this);" onkeypress="formatNumber(this);" >
                                            </div>
                                        </div>

                                         <div class="text-center">
                                                <button type="submit" class="btn btn-purple" name="submit" value="submit" id="submit">Submit</button>
                                                <a href="?page=data_bahan"<button type="button" class="btn btn-purple" name="button" value="button" id="button">Kembali</button></a>

                                            </div>
                                    </form>
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