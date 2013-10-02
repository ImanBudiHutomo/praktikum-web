<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Greeting</title>
</head>
<body>
<?php
		function greeting($jam)
	{
		echo 'Pukul ';echo $jam;
		if($jam<=10)
	{
		echo ' : Selamat Pagi';
		echo '<br/>';
	}
		else if($jam>=11&&$jam<=14)
	{
		echo ' : Selamat Siang';
		echo '<br/>';
	}
		else if($jam>=15&&$jam<=18)
	{
		echo ' : Selamat Sore';
		echo '<br/>';
	}
		else if($jam>=19&&$jam<=24)
	{
		echo ' : Selamat Malam';
		echo '<br/>';
	}
		else 
	{
		echo '';
	}
	}
	greeting(24);
	?>
</body>
</html>