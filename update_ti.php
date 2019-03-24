<?php
include "koneksi.php";

    $cid=$_POST['id'];
	$cunit_kerja=$_POST['unit_kerja'];
	$csingkatan=$_POST['singkatan'];
	$cid_unker_parent=$_POST['id_unker_parent'];




if(!empty($cid)&&!empty($cunit_kerja)&&!empty($csingkatan)&&!empty($cid_unker_parent))
	{
	$ubah = "UPDATE unit_kerja_ti SET unit_kerja='$cunit_kerja',singkatan='$csingkatan',id_unker_parent='$cid_unker_parent' WHERE id='$cid' ";
		mysqli_query($konek,$ubah);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		header("location:data_ti.php");
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		include "edit_ti.php";
		
	}
		
	
?>