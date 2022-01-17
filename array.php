<?php 
$mhs = array('Beni','Jeri','Peri','Meri','Veri','Keri');
echo "Tolong panggilkan ".$mhs[3];
echo "<br>";
$dt_mhs = array(
		'nama'=>'Beni',
		'alamat'=>'Jambi',
		'no_hp'=>'08192789012',
		'nim'=>'0808121'
		);
echo "Tolong panggilkan ".$dt_mhs['nim']." ".$dt_mhs['nama'];
echo "<br>";
$dt_mhs = array();
$dt_mhs = [
			[			
				'nama'=>'Beni',
				'alamat'=>'Jambi',
				'no_hp'=>'08192789012',
				'nim'=>'0808121',					
			],
			[			
				'nama'=>'Geeri',
				'alamat'=>'padang',
				'no_hp'=>'08192789012',
				'nim'=>'0981289',					
			]
		];
foreach ($dt_mhs as $dt) {
	echo "Nama = ".$dt['nama']."<br>";
	echo "Alamat = ".$dt['alamat']."<br>";
	echo "<hr>";
}
?>