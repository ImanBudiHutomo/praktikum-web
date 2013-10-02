<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Generate Table</title>
</head>
<body bg-color="white">
<center>
<h1>Generate Table</h1>
<h3>Menggenerate Cell Table Secara Fleksibel</h3>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Masukkan jumlah sel <input name="sel" type="text" size="4"> 
dan kolom <input name="columns" type="text" size="4"> 
<input type="submit" name="submit" value="Buat Tabel">
</form>

<?php
$columns = 1;
$sel = 1;
?>
<?php
if (isset($_POST['submit'])) 
{
    echo "<table width = 90% border = '1' cellspacing = '5' cellpadding = '0'>";
	//variabel input
	$sel = $_POST['sel'];
    $columns = $_POST['columns'];
	$rows=($sel/$columns);
	$width = $columns * 75;
	echo "<table width=".$width." border=1>";
	$rw = 0;
	$cel = 1;
	while ($rw < $rows && $cel <= $sel)
	{
		echo "<tr>";
		$cl = 0;
		while ($cl < $columns)
		{
		if ($cel <= $sel)
		{
		echo "<td><div align=center>".$cel."</div></td>";
		$cel++;
		}
		$cl++;
		}
	echo "</tr>";
	$rw++;
	}
echo "</table>";
}
?>
</center>
</body>
</html>