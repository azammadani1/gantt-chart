<?php

    include "koneksi.php";
	
		$cid=$_POST['id'];
		$cjenis_kegiatan=$_POST['jenis_kegiatan'];
		
	if(!empty($cid)&&!empty($cjenis_kegiatan))
	{
		$kuery="insert into kegiatan (id,jenis_kegiatan) values ('$cid','$cjenis_kegiatan')";
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
		include "data_jenis_kegiatan.php";
	
?>