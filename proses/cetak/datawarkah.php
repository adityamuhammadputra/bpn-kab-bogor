<?php ob_start(); 
include "../connect.php"; 
?>
<?php 
session_start();
if (empty($_SESSION['username'])) {
header("location:index.php");
}
else {
?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
   * {
    padding: 0;
    margin: 0;

   }
   body {
    font-size: 12px;
   }
   table {border-collapse:collapse; table-layout:fixed; width: 100%; }
   table th { padding: 3px 17px; text-align: center; }
   table tr {
    width: 100%;
   }
   table td {
    padding: 4px;
    text-align: center;
   }
   .container {
    width: 100% ;  
    position: relative;
    margin: auto;  
    font-size: 10px;
   }
   .header
   {
    position: relative;
    top:-16px;
    width: 100%;
    height: 20px;
    border-bottom: 1px solid;
   }
   .header img
   {
    width: 35%;
    height: auto;
    float: left;
    position: relative;
    left: -17px;
   }
   .header p
   {
    float: right;
    text-align: right;
    position: relative;
    top: 10px;
    color: rgb(130,130,130);
    font-size: 9px;
   }
   .header b
   {
    color: rgb(140,140,140);
   }
   .info
   {
    background-color: red;
    float: left;
    width: 120px;
    height: 40px;
   }
   .tr
   {
    background-color: rgb(230,230,230);
    font-size: 12px;
    color: black;
   }
   .garis
   {
    border-bottom: 0.5px dashed black;
    width: 100%;
    height: 1px;
   }
   .judul
   {
    width: 30%;
    height: 30px;
    margin-bottom: 5px;
    border-bottom: 0.5px dashed black;
  }
   .judul td
   {
    padding: 1.5px;
    text-align: left;
   }
   .grey
   {color: rgb(100,100,100);
  }
  .fotowarkah
  {
    position: relative;
    top: -60px;
    left: 295px;
    width: 60px;
    height: 60px;
  }
   
   </style>
</head>
<body>
<div class="header">
  <img src="../../assets/images/bpn.jpg" width="80">
  <p>Jl.Sekian, no Sekian <br>
     Kabupaten Bogor, Jawabarat <br>
  <b>Telp:0251-xxxxx</b></p>
</div>
<br>
<div class="container">
<?php
if (isset($_GET['id'])) 
$id = $_GET['id'];
?>
<div class="judul">
<table>
  <tr>
    <td class="grey">Petugas Pengecekan</td><td>:</td>
    <td><?php echo $_SESSION['username'] ?></td>
  </tr>
  <tr>
    <td class="grey">Tanggal</td>
    <td>:</td>
    <td><?php echo date('d-M-Y'); ?> </td>
  </tr>

<?php
$query2 = "SELECT * FROM tbl_datawarkah where id = '$id'";
$sql2 = mysqli_query($conn, $query2);
$hasil = mysqli_fetch_array($sql2);
?>
  <tr>
    <td class="grey">No. Warkah</td>
    <td>:</td>
    <td><?php echo $hasil['no_warkah']; ?> </td>
  </tr>
  <tr>
    <td class="grey">Tahun</td>
    <td>:</td>
    <td><?php echo $hasil['tahun']; ?> </td>    
  </tr>
</table>
</div>
 <?php echo'<img src="../../upload/datawarkah/'.$hasil['foto'].'" class="fotowarkah">' ?>
<br><br>
<table border="" width="100%">
<tr class="tr">
  <th>Nomor Box</th>
  <th>Lokasi</th>
  <th>Rak</th>
  <th>Baris</th>
  <th>Posisi</th>
</tr>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
include "../connect.php";
$query = "SELECT * FROM tbl_datawarkah where id = '$id'"; // Tampilkan semua data gambar
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['no_box']."</td>";
        echo "<td>".$data['lokasi_ruang']."</td>";
        echo "<td>".$data['rak']."</td>";
        echo "<td>".$data['baris']."</td>";
        echo "<td>".$data['posisi']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
}

?>    
</table>
<div class="garis">
  
</div>
</div>

</body>
</html>
<?php } ?>
<?php
$html = ob_get_contents();
ob_end_clean();        
require_once('../../assets/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A6','en');
$pdf->WriteHTML($html);
$pdf->Output('PencarianDataWarkah.pdf');
?>