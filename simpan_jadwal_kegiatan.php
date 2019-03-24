<?php

    include "koneksi.php";
	
		$cid=$_POST['id'];
        $cid_jenis_kegiatan=trim(mysqli_real_escape_string($konek, $_POST['id_jenis_kegiatan']));
        $cid_tema_kegiatan=trim(mysqli_real_escape_string($konek, $_POST['id_tema_kegiatan']));
        $ctanggal_mulai=$_POST['tanggal_mulai'];
        $ctanggal_selesai=$_POST['tanggal_selesai'];
        $cid_unit_kerja_bpk=trim(mysqli_real_escape_string($konek, $_POST['id_unit_kerja_bpk']));

        
		
	if(!empty($cid)&&!empty($cid_jenis_kegiatan)&&!empty($cid_tema_kegiatan)&&!empty($ctanggal_mulai)&&!empty($ctanggal_selesai)&&!empty($cid_unit_kerja_bpk))
	{
		$kuery="insert into jadwal_kegiatan (id,id_jenis_kegiatan,id_tema_kegiatan,tanggal_mulai,tanggal_selesai,id_unit_kerja_bpk) values ('$cid','$cid_jenis_kegiatan','$cid_tema_kegiatan','$ctanggal_mulai','$ctanggal_selesai','$cid_unit_kerja_bpk')";
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
		include "data_jadwal_kegiatan.php";
	
?>