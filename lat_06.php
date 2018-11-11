<html>
<head>
	<title>Penyisipan variabel pada HTML</title>
</head>
<body>
Silahkan sebutkan warna kesukaan anda...?<br>
	<?php 
	//Berikut ini adalah kode PHP yang disisipkan 
	$warna1 = "Merah";
	$warna2 = "Hijau";
	$warna3 = "Kuning";
	?>
	<b> Dibawah ini adalah warna kesukaanku : <br>
	<?php
	print "$warna1, $warna2, $warna3</b>";
	?>
</body>
</html>