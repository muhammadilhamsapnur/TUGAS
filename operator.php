<!DOCTYPE html>
<html>
<head>
	<title>Belajar Operator</title>
</head>
<body>

<h1>Belajar Operator</h1>

<h4>Aritmatika</h4>
<?php 
$x = 11;$y = 11;
echo "X =".$x."<br>";
echo "Y =".$y."<br>";
$tambah = $x + $y;
$bagi = $x / $y;
$kali = $x * $y;
$kurang = $x - $y;
$modulus = $x % $y;
$pangkat = $x ** $y;
echo "X + Y = ".$tambah."<br>";
echo "X x Y = ".$kali."<br>";
echo "X - Y = ".$kurang."<br>";
echo "X : Y = ".$bagi."<br>";
echo "X % Y = ".$modulus."<br>";
echo "X ** Y = ".$pangkat."<br>";
?>

<h4>Perbandingan</h4>
<?php
if($x<=$y){ // <= termasuk batas < range
	$hasil = "Benar";
}else{
	$hasil = "Salah";
}
echo "X <= Y = ".$hasil."<br>";
?>

<h4>Logika</h4>
<?php
$x = 11;$y = 11;
if($x<5 && ($y<10 || $y>0)){
	$hasil = "Benar";
}else{
	$hasil = "Salah";
}
echo "X>5 or Y<10 = ".$hasil."<br>";
?>


<h4>Penugasan</h4>
<?php
$jum = $x+=$y;
$kur = $x-=$y;
echo "X = Y = ".$x=$y."<br>";
echo "X += Y = ".$jum."<br>";
echo "X -= Y = ".$kur."<br>";
?>

<h4>String</h4>
<?php
$pesan = "";
$pesan .= "Budi <br>";
$pesan .= "Mandi";
echo "S1.=S2 = ".$pesan."<br>";

?>

</body>
</html>