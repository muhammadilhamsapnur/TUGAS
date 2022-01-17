<html style="background-color: green;" >
<center>
<table style="padding-top: 250px">
<form method="post" action="Tpercabangan.php">
	<tr>
		<td><b>Masukkan Total Penggunaan</b> </td>
		<td style="padding-left: 25px"><input type="text" name="pem" placeholder="Silahkan masukkan"></td>
	</tr>
	<tr>
		<td></td>
		<td style="padding-left: 25px;padding-bottom: 20px"><input type="submit" name="proses" value="Hitung" /></td>
	</tr>
</table>
</html>

<?php

if(isset($_POST["proses"])){
	$pem = $_POST["pem"];
	if($pem<=30){
		$bayar = $pem * 150;
	}elseif($pem>30 && $pem<=60){
		$bayar = (30 * 150) + (($pem-30) * 170);
		// $bayar = 4500 + (($pem - 30) * 170);
		// $bayar = $pem * 170 + 4500;
	}elseif($pem>60 && $pem<=90){
		$bayar = (30 * 150) + (30 * 170) + (($pem-60) * 210);
	}else{
		$bayar = (30 * 150) + (30 * 170) + (30 * 210) + (($pem-90) * 250);
	}		
	echo "Anda harus membayar = ".$bayar;
}


?>
</center>