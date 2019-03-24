<?php
require_once("mysqlminang.php");
$p=new Mysqlminang("prototype","localhost","root","");
$sql="Select * from jadwal_kegiatan_pegawai inner join pegawai on jadwal_kegiatan_pegawai.id_pegawai=pegawai.id";
$data=array();
foreach($p->GetAllRows($sql) as $row)
{
	$data[]=array(
				'title'=>$row->nama,
				'start'=>$row->tanggal_pergi,
				'end'=>$row->tanggal_balik,
				);
}
	echo json_encode($data);
?>