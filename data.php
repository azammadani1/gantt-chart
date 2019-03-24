<?php
require_once("mysqlminang.php");
$p=new Mysqlminang("prototype","localhost","root","");
$sql="Select * from jadwal_kegiatan INNER JOIN kegiatan on jadwal_kegiatan.id_jenis_kegiatan=kegiatan.id";
$data=array();
foreach($p->GetAllRows($sql) as $row)
{
	$data[]=array(
				'title'=>$row->jenis_kegiatan,
				'start'=>$row->tanggal_mulai,
				'end'=>$row->tanggal_selesai,
				);
}
	echo json_encode($data);
?>