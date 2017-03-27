<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='webbanhang';
$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Khong the ket noi');
mysql_select_db($csdl,$conn);
?>