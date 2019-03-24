<?php
include "koneksi.php";

    $cid=$_POST['id'];
	$cjenis_kegiatan=$_POST['jenis_kegiatan'];


if(!empty($cid)&&!empty($cjenis_kegiatan))
	{
	$ubah = "UPDATE kegiatan SET jenis_kegiatan='$cjenis_kegiatan' WHERE id='$cid' ";
		mysqli_query($konek,$ubah);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		header("location:data_jenis_kegiatan.php");
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		include "edit_jenis_kegiatan.php";
		
	}
		
	
?>