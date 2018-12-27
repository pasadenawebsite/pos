
<?php 
error_reporting(0);
?>
<style type="text/css">
*{
font-family: Arial;
margin:0px;
padding:0px;
}
@page {
 width:21cm;
 height:28cm;
 font-size:6pt;
}
table.grid{
width:21cm;
height:11cm;
font-size: 6pt;
border-collapse:collapse;
}
table.grid th{
}
table.grid th{
background: #F0F0F0;
border-top: 0.2mm solid #000;
border-bottom: 0.2mm solid #000;
text-align:center;
padding-left:0.2cm;
border:1px solid #000;
font-size:8px;
}
table.grid tr td{
border-bottom:0.2mm solid #000;
border:1px solid #000;
}
h1{
font-size: 12pt;
}
h2{
font-size: 10pt;
text-align:left;
}
h3{
font-size: 8pt;
}
.profil{
display: block;
width:21cm ;
font-size:8pt;
margin:0px;
padding:0px;
}
.profil .koperasi{
font-size:14px;
font-weight:bold;
}
.header{
display: block;
width:21cm ;
margin-bottom: 0.3cm;
text-align: center;
}
.attr{
font-size:9pt;
width: 100%;
padding-top:1pt;
padding-bottom:1pt;
border-top: 0.2mm solid #000;
border-bottom: 0.2mm solid #000;
}
.pagebreak {
width:11cm ;
page-break-after: always;
margin-bottom:10px;
}
.akhir {
width:11cm ;
font-size:13px;
}
.page {
width:28cm ;
height:21cm;
font-size:12px;
}

</style>
<body onLoad="window.print()">
<div class="header">
<?php 

function Terbilang($x) 
{ 
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"); 
  if ($x < 12) 
    return " " . $abil[$x]; 
  elseif ($x < 20) 
    return Terbilang($x - 10) . "belas"; 
  elseif ($x < 100) 
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10); 
  elseif ($x < 200) 
    return " seratus" . Terbilang($x - 100); 
  elseif ($x < 1000) 
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100); 
  elseif ($x < 2000) 
    return " seribu" . Terbilang($x - 1000); 
  elseif ($x < 1000000) 
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000); 
  elseif ($x < 1000000000) 
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000); 
    
    
} 

	$no=1;
	$page =1;
$d1=$_GET['d1'];
$d2=$_GET['d2'];	
?>
<h2 align="center">Laporan Data Pembelian <?php echo $d1;?> s/d <?php echo $d2;?></h2>
<table class="table" cellspacing="0" style="text-align:center" align="center">
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
										$a=mysqli_query($koneksi, "SELECT * FROM pembelian where tgl between '$d1' AND '$d2'");
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

    <?php
//	echo "<div class='page' align='center'>Hal - ".$page."</div>";
?>
</body>