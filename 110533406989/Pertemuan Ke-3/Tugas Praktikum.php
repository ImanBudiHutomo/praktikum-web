<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Tugas Praktikum</title>
</head>

<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return cek(this)">
<div id="apDiv1">
  <div id="header">
    <br>
  </div>
  <div>
	<hr>
	<div align="center"><strong>Login</strong> 
	<hr>
  </div>
	<div>
    <div align="center"><strong><br>Username :</strong>
    <input type="text" name="user" size="20" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return huruf(event)">
    <br>
    <br>
    <strong>Password : </strong>
    <input type="password" name="pass" size="20" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return huruf(event)">
    <br>
	<br>
    <br>
	<input type="submit" name="submit" value="ENTER" ></div>
    <br>
    </div>
  </div>
  <br>     
</form>
<script type="text/javascript">
function cek()
{
    if(form1.user.value == "")
    {
        alert('Masukkan Username Terlebih Dahulu! ');
        document.form1.user.focus();
        return false;
    }
    else if(form1.pass.value=="")
    {   
        alert('Masukkan Password Terlebih Dahulu! ');
        document.form1.pass.focus();
        return false;
    }   
return true;
}
function huruf(evt)
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('User Name dan Password Harus Berupa Huruf ');
        return false;
    }
    return true;
}
</script>
</body>
</html>