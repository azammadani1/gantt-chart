<?php
  include "koneksi.php";
  $cid = $_GET['id'];
  $delete_query ="DELETE FROM unit_kerja_bpk WHERE id='$cid'";
  
  
  mysqli_query($konek,$delete_query);
  header("location:data_bpk.php");
  die();
?>