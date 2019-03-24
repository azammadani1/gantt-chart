<?php
  include "koneksi.php";
  $cid = $_GET['id'];
  $delete_query ="DELETE FROM jadwal_kegiatan_pegawai WHERE id='$cid'";
  
  
  mysqli_query($konek,$delete_query);
  header("location:data_jadwal_pegawai.php");
  die();
?>