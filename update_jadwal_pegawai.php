<?php
include "koneksi.php";

$cid=$_POST['id'];
$cid_pegawai=trim(mysqli_real_escape_string($konek, $_POST['id_pegawai']));
$cid_jadwal_kegiatan=trim(mysqli_real_escape_string($konek, $_POST['id_jadwal_kegiatan']));
$ctanggal_pergi=$_POST['tanggal_pergi'];
$ctanggal_balik=$_POST['tanggal_balik'];
   

if(!empty($cid)&&!empty($cid_pegawai)&&!empty($cid_jadwal_kegiatan)&&!empty($ctanggal_pergi)&&!empty($ctanggal_balik))
	{
	$ubah = "UPDATE jadwal_kegiatan_pegawai SET id_pegawai='$cid_pegawai',id_jadwal_kegiatan='$cid_jadwal_kegiatan',tanggal_pergi='$ctanggal_pergi',tanggal_balik='$ctanggal_balik' WHERE id='$cid'";
		mysqli_query($konek,$ubah);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		header("location:data_jadwal_pegawai.php");
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		include "data_jadwal_pegawai.php";
		
	}
		
	
?>