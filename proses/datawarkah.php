<?php
include "../proses/connect.php";
 if(isset($_POST['simpan']))
{
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $fotobaru = date('dmYHis').$foto;
  $path = "../upload/datawarkah/".$fotobaru;
  if(move_uploaded_file($tmp, $path)){ 
  	$sql = "INSERT INTO tbl_datawarkah (no_warkah,no_box,tahun,lokasi_ruang,rak,baris,posisi,foto,inputan) VALUES ('".$_POST['no_warkah']."','".$_POST['no_box']."','".$_POST['tahun']."','".$_POST['lokasi_ruang']."','".$_POST['rak']."','".$_POST['baris']."','".$_POST['posisi']."','".$fotobaru."','".$_POST['inputan']."')";
    	if(mysqli_query($conn,$sql)){
    	header("location:../datawarkah");}
    	else {
    	echo "Data Gagal Disimpan";}
      }
  else{
  echo "Maaf, Gambar gagal untuk diupload.";
  }
}

if (isset($_POST['edit'])) {
  $id = $_POST['id'];
	$no_warkah	= $_POST['no_warkah'];
	$no_box	= $_POST['no_box'];
	$tahun = $_POST['tahun'];
  $lokasi_ruang = $_POST['lokasi_ruang'];
  $rak = $_POST['rak'];
  $baris = $_POST['baris'];
  $posisi = $_POST['posisi'];
  $inputan = $_POST['inputan'];
  if(isset($_POST['ubah_foto'])){
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $fotobaru = date('dmYHis').$foto;
  $path = "../upload/datawarkah/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tbl_datawarkah WHERE id='".$id."'";
    $sql = mysqli_query($conn, $query); 
    $data = mysqli_fetch_array($sql);
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("../upload/datawarkah/".$data['foto'])) // Jika foto ada
      unlink("../upload/datawarkah/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE tbl_datawarkah SET no_warkah='".$no_warkah."', no_box='".$no_box."',tahun='".$tahun."', lokasi_ruang='".$lokasi_ruang."', rak='".$rak."', baris='".$baris."',posisi='".$posisi."', foto='".$fotobaru."',inputan='".$inputan."' WHERE id='".$id."'";
    $sql = mysqli_query($conn, $query); 
    if($sql){
      header("location: ../datawarkah");
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='../edit/datawarkah'>Kembali Ke Form</a>";
    }
  }else{
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='../edit/datawarkah'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE tbl_datawarkah SET no_warkah='".$no_warkah."', no_box='".$no_box."', tahun='".$tahun."', lokasi_ruang='".$lokasi_ruang."', rak='".$rak."', baris='".$baris."',posisi='".$posisi."',inputan='".$inputan."' WHERE id='".$id."'";
  $sql = mysqli_query($conn, $query); 
  if($sql){
    header("location: ../datawarkah");
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan.";
    echo "<br><a href='../edit/datawarkah'>Kembali Ke Form</a>";
  }
}
}
 
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "SELECT * FROM tbl_datawarkah WHERE id='".$id."'";
    $sql = mysqli_query($conn, $query); 
    $data = mysqli_fetch_array($sql); 

      if(is_file("../upload/datawarkah/".$data['foto']))
        unlink("../upload/datawarkah/".$data['foto']); 
        $query2 = "DELETE FROM tbl_datawarkah WHERE id='$id' ";
        $hasil_query = mysqli_query($conn, $query2);
      if(!$hasil_query) {
        die ("Gagal menghapus data: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
    }
    else {
  echo '<script>alert("Data berhasil dihapus!");window.location.href = "../datawarkah";</script>';}
  }

  ?>