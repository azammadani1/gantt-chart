<?php
include "koneksi.php";

$cid=$_POST['id'];
$cid_jenis_kegiatan=trim(mysqli_real_escape_string($konek, $_POST['id_jenis_kegiatan']));
$cid_tema_kegiatan=trim(mysqli_real_escape_string($konek, $_POST['id_tema_kegiatan']));
$ctanggal_mulai=$_POST['tanggal_mulai'];
$ctanggal_selesai=$_POST['tanggal_selesai'];
$cid_unit_kerja_bpk=trim(mysqli_real_escape_string($konek, $_POST['id_unit_kerja_bpk']));


	if(!empty($cid)&&!empty($cid_jenis_kegiatan)&&!empty($cid_tema_kegiatan)&&!empty($ctanggal_mulai)&&!empty($ctanggal_selesai)&&!empty($cid_unit_kerja_bpk))
	{
	$ubah = "UPDATE jadwal_kegiatan SET id_jenis_kegiatan='$cid_jenis_kegiatan',id_tema_kegiatan='$cid_tema_kegiatan',tanggal_mulai='$ctanggal_mulai',tanggal_selesai='$ctanggal_selesai',id_unit_kerja_bpk='$cid_unit_kerja_bpk' WHERE id='$cid'";
		mysqli_query($konek,$ubah);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		header("location:data_jadwal_kegiatan.php");
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		include "data_jadwal_kegiatan.php";
		
	}
		
	
?>