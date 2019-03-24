<?php

    include "koneksi.php";
	
		$cid=$_POST['id'];
		$cunit_kerja=$_POST['unit_kerja'];
		$csingkatan=$_POST['singkatan'];
		$cid_unker_parent=$_POST['id_unker_parent'];
		
	if(!empty($cid)&&!empty($cunit_kerja)&&!empty($csingkatan)&&!empty($cid_unker_parent))
	{
		$kuery="insert into unit_kerja_ti (id,unit_kerja,singkatan,id_unker_parent) values ('$cid','$cunit_kerja','$csingkatan','$cid_unker_parent')";
		mysqli_query($konek,$kuery);
		?>
        <script type="text/javascript">
			alert("TERSIMPAN");
        </script>
        <?php
		
	}
	else
	{
    	?>
        <script type="text/javascript">
			alert("Ada Yang belum Terisi");
        </script>
        <?php
		
	}
		include "data_ti.php";
	
?>