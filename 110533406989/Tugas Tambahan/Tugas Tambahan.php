<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tugas Tambahan</title>
<style type="text/css">
                        body{
                                background-color:#00FF33;
                        }
</style>
<script type="text/javascript">
                        function cek(angka){
                                cek = /^[A-Za-z]{1,}$/;                
                                return cek.test(angka);
                        }
                        function validasi(form){
                                var angka1 = form.var1.value;                
                                var angka2 = form.var2.value;                
                                if(angka1 === '' || angka2 === ''){                                
                                        alert("Angka1 dan Angka2 Tidak Boleh Kosong");
                                        form.var1.focus();                                
                                        return false;
                                }else if(cek(angka1) || cek(angka1)){                        
                                        alert("Angka1 dan Angka2 harus berupa angka");
                                }else{                                                                                       
                                        return true;
                                }                
                        }
</script>
<body>
<form method='post'>
<table align='center'>
<tr><td colspan=6 align='center'> 
<font size=4 >Tugas Tambahan</font> <BR><BR></td></tr>
<tr>
<td align='center'>Angka 1</td>
<td align='center'> </td>
<td align='center'>Angka 2</td>
<td align='center'> </td>
<td align='center'>Hasil</td>
</tr>
<tr>
<td>
<input type="text" name="angka1" value="<?php
    if(isset($_POST['angka1'])){                        
    echo $_POST['angka1'];
    }
	?>"/><br /></td>
<td><select name="operator">
<option value="+"
<?php if (isset($_POST['operator']) && $_POST['operator']=='+') {
				echo "selected";
			} ?>
>+</option>
<option value="-"
<?php if (isset($_POST['operator']) && $_POST['operator']=='-') {
				echo "selected";
			} ?>
>-</option>
<option value="*"
<?php if (isset($_POST['operator']) && $_POST['operator']=='*') {
				echo "selected";
			} ?>
>*</option>
<option value="/"
<?php if (isset($_POST['operator']) && $_POST['operator']=='/') {
				echo "selected";
			} ?>
>/</option>
</select></td>
<td>
<input type="text" name="angka2" value="<?php
    if(isset($_POST['angka2'])){                        
    echo $_POST['angka2'];
    }
	?>"/><br /></td>
<?php
function tambah ($angka1,$angka2)
{
	return ($angka1+$angka2);
}
function kurang ($angka1,$angka2)
{
	return ($angka1-$angka2);
}
function bagi ($angka1,$angka2)
{
	return ($angka1/$angka2);
}
function kali ($angka1,$angka2)
{
	return ($angka1*$angka2);
}
?>
<?php
	if(isset($_POST['angka1']) or isset($_POST['angka2']) ){
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	}
	else
	{
		$angka1 = "0";
		$angka2 = "0";
	}
	if(isset($_POST['operator'])){
	$operator =$_POST['operator'];
	}
	else
	{
		$operator ="";
	}
	if (@$_POST['operator'] == '+'){
	$hasil=tambah($angka1,$angka2);}
	else if (@$_POST['operator'] == '-'){
	$hasil=kurang($angka1,$angka2);}
	else if (@$_POST['operator'] == '*'){
	$hasil=kali($angka1,$angka2);}
	else if (@$_POST['operator'] == '/'){
	$hasil=bagi($angka1,$angka2);}
?>
<td>
	<input type="submit" value="=" /></td>
<td>
	<input type="text" name="hasil" value="<?php
    if(isset($_POST['hasil'])){                        
    echo $hasil;
    }?>"/>
			<br/>
		</td>
	</body>
</html>