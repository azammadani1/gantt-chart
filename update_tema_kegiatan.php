<?php
include "koneksi.php";

    $cid=$_POST['id'];
	$ctema_kegiatan=$_POST['tema_kegiatan'];


if(!empty($cid)&&!empty($ctema_kegiatan))
	{
	$ubah = "UPDATE tema_kegiatan SET tema_kegiatan='$ctema_kegiatan' WHERE id='$cid' ";
		mysqli_query($konek,$ubah);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		header("location:data_tema_kegiatan.php");
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		include "edit_tema_kegiatan.php";
		
	}
		
	
?>