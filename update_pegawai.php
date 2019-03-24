<?php
include "koneksi.php";

    $cid=$_POST['id'];
	$cnip_lama=$_POST['nip_lama'];
	$cnip_baru=$_POST['nip_baru'];
    $cnama=$_POST['nama'];
    $cgolongan=$_POST['golongan'];
	$cid_unit_kerja_ti=trim(mysqli_real_escape_string($konek, $_POST['id_unit_kerja_ti']));
	$ckegiatan=trim(mysqli_real_escape_string($konek, $_POST['nama_kegiatan']));


if(!empty($cid)&&!empty($cnip_lama)&&!empty($cnip_baru)&&!empty($cnama)&&!empty($cgolongan)&&!empty($cid_unit_kerja_ti)&&!empty($ckegiatan))
	{
	$ubah = "UPDATE pegawai SET nip_lama='$cnip_lama',nip_baru='$cnip_baru',nama='$cnama',golongan='$cgolongan',id_unit_kerja_ti='$cid_unit_kerja_ti',nama_kegiatan='$ckegiatan' WHERE id='$cid'";
		mysqli_query($konek,$ubah);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		header("location:data_pegawai.php");
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		include "edit_pegawai.php";
		
	}
		
	
?>