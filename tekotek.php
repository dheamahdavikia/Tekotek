<!DOCTYPE html>
<html>
<head>
	<title>Tekotek</title>

</head>
<body>
	<?php
		echo'Tekotek-kotek Anak Ayam Turun 100';
		echo '<br>';
		for ($i=99;$i>=1;$i--) {
			if ($i % 2 == 0) {
				$color = "brown";
			} else {
				$color = "orange";
			}
			echo "<span style='color:$color; font-family: Helvetica'>Mati satu tinggal $i</span><br>";
		}
	?>
</body>
</html>