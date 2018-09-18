<?php

$tenmaychu = 'localhost';
$tentaikhoan = 'root';
$pass = '';
$csdl = 'btvnss3';
$conn = mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Khong ket noi duoc');
mysqli_select_db($conn,$csdl);

