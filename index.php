<?php include "components/header.php";

?>
<?php  
          if (isset($_GET['page'])) {
            if ($_GET['page']=="admin") {
              include 'admin.php';
            }
            elseif ($_GET['page']=="home") {
			  include "components/side.php";
              include 'pages/home.php';
            }
			 elseif ($_GET['page']=="status_pemesanan") {
			  include "components/side.php";
              include 'pages/status_pemesanan.php';
            }
			 elseif ($_GET['page']=="data_penjualan") {
			  include "components/side.php";
              include 'pages/data_penjualan.php';
            }
			elseif ($_GET['page']=="data_pembelian") {
			  include "components/side.php";
              include 'pages/data_pembelian.php';
            }
			elseif ($_GET['page']=="edit_pembelian") {
			  include "components/side.php";
              include 'pages/edit_pembelian.php';
            }
			elseif ($_GET['page']=="lap_pembelian") {
			  include "components/side.php";
              include 'pages/lap_pembelian.php';
            }
			elseif ($_GET['page']=="lap_pembelian2") {
			  include "components/side.php";
              include 'pages/lap_pembelian2.php';
            }
			elseif ($_GET['page']=="cetak_pembelian") {
              include 'pages/cetak_pembelian.php';
            }
			elseif ($_GET['page']=="data_bahan") {
			  include "components/side.php";
              include 'pages/data_bahan.php';
            }
			elseif ($_GET['page']=="edit_bahan") {
			  include "components/side.php";
              include 'pages/edit_bahan.php';
            }
			elseif ($_GET['page']=="data_barang") {
			  include "components/side.php";
              include 'pages/data_barang.php';
            }
			elseif ($_GET['page']=="edit_barang") {
			  include "components/side.php";
              include 'pages/edit_barang.php';
            }
			elseif ($_GET['page']=="penjualan") {
			  include "components/side.php";
              include 'pages/penjualan.php';
            }
			 elseif ($_GET['page']=="login") {
              include 'pages/login.php';
            }
			else {
				 include 'pages/login.php';
				}
		  }
		  else {
				 include 'pages/login.php';
				}
			?>
	                        
<?php include "components/footer.php";?>

        