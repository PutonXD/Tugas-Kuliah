<!DOCTYPE html>
<html>
<head>
	<title>Survey Kepuasan Pelanggan</title>
    <style>
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
			font-size: 14px;
		}
		input[type="number"] {
			display: block;
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
			border: none;
			border-bottom: 1px solid #ccc;
			font-size: 16px;
		}
		input[type="submit"] {
			display: block;
			margin-top: 20px;
			padding: 10px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 3px;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h2>Survey Kepuasan Pelanggan</h2>
    <h4>Silahkan masukkan angka 1-5, semakin banyak nilai yang anda berikan semakin tinggi tingkat kepuasan anda.</h4>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Kecepatan Pelayanan : </label>
		<input type="number" name="kecepatan" min="1" max="5"><br><br>
		<label>Ketepatan Pelayanan : </label>
		<input type="number" name="ketepatan" min="1" max="5"><br><br>
		<label>Keramahan Pelayanan : </label>
		<input type="number" name="keramahan" min="1" max="5"><br><br>
		<label>Kenyamanan Pelayanan : </label>
		<input type="number" name="kenyamanan" min="1" max="5"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$kecepatan = $_POST['kecepatan'];
			$ketepatan = $_POST['ketepatan'];
			$keramahan = $_POST['keramahan'];
			$kenyamanan = $_POST['kenyamanan'];

			$total = $kecepatan + $ketepatan + $keramahan + $kenyamanan;
			$rata_rata = $total / 4;

			echo "<h2>Hasil Survey</h2>";
			echo "<p>Kecepatan Pelayanan : ".$kecepatan."</p>";
			echo "<p>Ketepatan Pelayanan : ".$ketepatan."</p>";
			echo "<p>Keramahan Pelayanan : ".$keramahan."</p>";
			echo "<p>Kenyamanan Pelayanan : ".$kenyamanan."</p>";
			echo "<p>Total Nilai : ".$total."</p>";
			echo "<p>Rata-rata Nilai : ".$rata_rata."</p>";

			if($rata_rata >= 4.5) {
				echo "<p>Sangat Puas</p>";
			}
			elseif($rata_rata >= 3.5) {
				echo "<p>Puas</p>";
			}
			elseif($rata_rata >= 2.5) {
				echo "<p>Kurang</p>";
			}
			else {
				echo "<p>Sangat Kurang</p>";
			}
		}
	?>
</body>
</html>
