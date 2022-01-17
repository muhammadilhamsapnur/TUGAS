<!DOCTYPE html>
<html>
<head>
	<title>Kondisi</title>
</head>
<body>
<?php 
$suhu = 32;
if($suhu <= 32 && $suhu >= 0){ // 0 sd 32
	echo "Cuaca Dingin";
}elseif($suhu > 32 && $suhu <= 100){ // 33 sd 100
	echo "Cuaca Panas";
}else{ 
	echo "Cuaca Extrem";
}
?>
</body>
</html>