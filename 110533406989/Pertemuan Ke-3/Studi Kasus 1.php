<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Studi Kasus 1</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">	
Asal Daerah : <br/>
<select name="add">	
<option value="Ponorogo"
<?php
if (empty($_POST['add'])){	
$a = 'Kosong';
}else{	
$a = $_POST['add'];
}
if ($a == 'Ponorogo'){	
echo 'selected="selected"';
}
?>
>Ponorogo <br/>
<option value="Madiun"
<?php
if ($a == 'Madiun'){	
echo 'selected="selected"';
}
?>
>Madiun <br/>
<option value="Caruban"
<?php
if ($a == 'Caruban'){	
echo 'selected="selected"';
}
?>
>Caruban <br/>
<option value="Saradan"
<?php
if ($a == 'Saradan'){	
echo 'selected="selected"';
}
?>
>Saradan <br/>
<option value="Nganjuk"
<?php
if ($a == 'Nganjuk'){	
echo 'selected="selected"';
}
?>
>Nganjuk <br/>
<option value="Kertosono"
<?php
if ($a == 'Kertosono'){	
echo 'selected="selected"';
}
?>
>Kertosono <br/>
<option value="Jombang"
<?php
if ($a == 'Jombang'){	
echo 'selected="selected"';
}
?>
>Jombang <br/>
<option value="Mojokerto"
<?php
if ($a == 'Mojokerto'){	
echo 'selected="selected"';
}
?>
>Mojokerto <br/>
<option value="Surabaya"
<?php
if ($a == 'Surabaya'){	
echo 'selected="selected"';
}
?>
>Surabaya <br/>
</select> <br />
<input type="submit" value="OK" /> 
</form>
<?php
if (isset($_POST['add'])){	
echo $_POST['add'];	
}
?>
</body>
</html>