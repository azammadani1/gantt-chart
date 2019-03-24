<?php
  include "koneksi.php";
  $cid = $_GET['id'];
  $delete_query ="DELETE FROM tema_kegiatan WHERE id='$cid'";
  
  
  mysqli_query($konek,$delete_query);
  header("location:data_tema_kegiatan.php");
  die();
?>