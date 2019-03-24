<?php
include "koneksi.php";

    $cid=$_POST['id'];
	$cunit_kerja=$_POST['unit_kerja'];
	$clokasi_kegiatan=$_POST['lokasi_kegiatan'];
	$ctingkat_eselon=$_POST['tingkat_eselon'];




if(!empty($cid)&&!empty($cunit_kerja)&&!empty($clokasi_kegiatan)&&!empty($ctingkat_eselon))
	{
	$ubah = "UPDATE unit_kerja_bpk SET unit_kerja='$cunit_kerja',lokasi_kegiatan='$clokasi_kegiatan',tingkat_eselon='$ctingkat_eselon' WHERE id='$cid' ";
		mysqli_query($konek,$ubah);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		header("location:data_bpk.php");
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		include "edit_bpk.php";
		
	}
		
	
?>