<?php

    include "koneksi.php";
	
		$cid=$_POST['id'];
		$cunit_kerja=$_POST['unit_kerja'];
		$clokasi_kegiatan=$_POST['lokasi_kegiatan'];
		$ctingkat_eselon=$_POST['tingkat_eselon'];
		
	if(!empty($cid)&&!empty($cunit_kerja)&&!empty($clokasi_kegiatan)&&!empty($ctingkat_eselon))
	{
		$kuery="insert into unit_kerja_bpk (id,unit_kerja,lokasi_kegiatan,tingkat_eselon) values ('$cid','$cunit_kerja','$clokasi_kegiatan','$ctingkat_eselon')";
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
		include "data_bpk.php";
	
?>