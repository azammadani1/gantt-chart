<?php
  include "koneksi.php";
  $cid = $_GET['id'];
  $delete_query ="DELETE FROM kegiatan WHERE id='$cid'";
  
  
  mysqli_query($konek,$delete_query);
  header("location:data_jenis_kegiatan.php");
  die();
?>