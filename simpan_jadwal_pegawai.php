<?php

    include "koneksi.php";
	
		$cid=$_POST['id'];
        $cid_pegawai=trim(mysqli_real_escape_string($konek, $_POST['id_pegawai']));
        $cid_jadwal_kegiatan=trim(mysqli_real_escape_string($konek, $_POST['id_jadwal_kegiatan']));
        $ctanggal_pergi=$_POST['tanggal_pergi'];
        $ctanggal_balik=$_POST['tanggal_balik'];
        

        
		
	if(!empty($cid)&&!empty($cid_pegawai)&&!empty($cid_jadwal_kegiatan)&&!empty($ctanggal_pergi)&&!empty($ctanggal_balik))
	{
		$kuery="insert into jadwal_kegiatan_pegawai (id,id_pegawai,id_jadwal_kegiatan,tanggal_pergi,tanggal_balik) values ('$cid','$cid_pegawai','$cid_jadwal_kegiatan','$ctanggal_pergi','$ctanggal_balik')";
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
		include "data_jadwal_pegawai.php";
	
?>