
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Studi Kasus 2</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Buah Favorit :<br/>
<input type="checkbox" name="buah[]" value="Jeruk"
<?php

if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
if($val == 'Jeruk'){	
echo 'checked="checked"';	
}
}
}
?>
/>Jeruk<br/>
<input type="checkbox" name="buah[]" value="Apel"
<?php
if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
if($val == 'Apel'){	
echo 'checked="checked"';	
}
}
}
?>
/>Apel<br/>
<input type="checkbox" name="buah[]" value="Pisang"
<?php
if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
if($val == 'Pisang'){	
echo 'checked="checked"';	
}
}
}
?>
/>Pisang<br/>
<input type="checkbox" name="buah[]" value="Semangka"
<?php
if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
if($val == 'Semangka'){	
echo 'checked="checked"';	
}
}
}
?>
/>Semangka<br/>
<input type="checkbox" name="buah[]" value="Melon"
<?php
if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
if($val == 'Melon'){	
echo 'checked="checked"';	
}
}
}
?>
/>Melon<br/>
<input type="checkbox" name="buah[]" value="Mangga"
<?php
if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
if($val == 'Mangga'){	
echo 'checked="checked"';	
}
}
}
?>
/>Mangga<br/>
<input type="checkbox" name="buah[]" value="Rambutan"
<?php
if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
if($val == 'Rambutan'){	
echo 'checked="checked"';	
}
}
}
?>
/>Rambutan<br/>
<input type="submit" value="OK" />
</form>
<?php

if (isset($_POST['buah'])){	
foreach ($_POST['buah'] as $key => $val){	
echo $key.'->'.$val.'<br />';	
}
}
?>
</body>
</html>