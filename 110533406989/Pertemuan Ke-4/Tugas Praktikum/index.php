<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Halaman Administrator</title>
	<style type="text/css">
        body{
        background-color:#0000FF;
        color:#FF6600;
        }
        a{
        color:#FF6600;
        }
        .inner{
        margin: 200px auto;
        padding: 20px;
        width: 240px;
        border:5px solid #FF0000;
        }
        </style>
</head>
<body bgcolor="#CC99FF">

<p>
<?php

ini_set('display_errors', 1);
define('_VALID', 1);

require_once('./autentikasi.php');
init_login();
validate();
?>

</p>
	<h4 style=" font-stretch:wider" align="center">Wellcome</h4>
	<p align="center">
	<a href="?m=logout"></a>
	<p align="center">
	<p style="font-size:18px" align="center" style="font-style:inherit" style="border-color:#990099" style="font-stretch:ultra-condensed">
				<br />Home
				<br />Profil
				<br />Materi
				<br />Download
				<br />Denah Lokasi
				<br />Contact Us
	<p align="center"><a href="?m=logout"><h3>Keluar</h3></a></p>
</body>
 
</html>