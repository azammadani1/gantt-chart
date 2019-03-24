<?php
  include "koneksi.php";
  $cid = $_GET['id'];
  $delete_query ="DELETE FROM jadwal_kegiatan WHERE id='$cid'";
  
  
  mysqli_query($konek,$delete_query);
  header("location:data_jadwal_kegiatan.php");
  die();
?>