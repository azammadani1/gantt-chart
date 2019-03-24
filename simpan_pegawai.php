<?php

    include "koneksi.php";
	
		$cid=$_POST['id'];
		$cnip_lama=$_POST['nip_lama'];
		$cnip_baru=$_POST['nip_baru'];
        $cnama=$_POST['nama'];
        $cgolongan=$_POST['golongan'];
        $cid_unit_kerja_ti=trim(mysqli_real_escape_string($konek, $_POST['id_unit_kerja_ti']));
        $ckegiatan=trim(mysqli_real_escape_string($konek, $_POST['nama_kegiatan']));
		
	if(!empty($cid)&&!empty($cnip_lama)&&!empty($cnip_baru)&&!empty($cnama)&&!empty($cgolongan)&&!empty($cid_unit_kerja_ti)&&!empty($ckegiatan))
	{
		$kuery="insert into pegawai (id,nip_lama,nip_baru,nama,golongan,id_unit_kerja_ti,nama_kegiatan) values ('$cid','$cnip_lama','$cnip_baru','$cnama','$cgolongan','$cid_unit_kerja_ti','$ckegiatan')";
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
		include "data_pegawai.php";
	
?>