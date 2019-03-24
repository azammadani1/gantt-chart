<?php
$xhost="localhost";
$xuser="root";
$xdb="prototype";

$xpass="";
$konek=mysqli_connect($xhost,$xuser,$xpass);

$dbkon=mysqli_select_db($konek,$xdb);

?>