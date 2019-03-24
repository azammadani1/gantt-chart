<?php

    include "koneksi.php";
	
		$cid=$_POST['id'];
		$ctema_kegiatan=$_POST['tema_kegiatan'];
		
	if(!empty($cid)&&!empty($ctema_kegiatan))
	{
		$kuery="insert into tema_kegiatan (id,tema_kegiatan) values ('$cid','$ctema_kegiatan')";
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
		include "data_tema_kegiatan.php";
	
?>