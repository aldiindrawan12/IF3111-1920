<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>SIMPLE LAPOR !</h1>
	<form action="" method="post">
		<input type="text" name="cari"> </input>
		<button type="submit" name="submit"> CARI </button>
	</form>

	<a href="" ><h3>Buat Laporan / Komentar</h3></a>
	<h4>Laporan / Komentar Terakhir</h4>
	<hr />
	
	<ul>
	<?php foreach ($lapor as $value){ ?> <!--$lapor didapet dari controller home -->
		<li>
			<h4 style="margin-bottom: 20px;"><?php echo $value["isi"]; ?></h4>
			<h4 class="lampiran">Lampiran : foto.jpg</h4>
			<a href=""><h4 class="detail">Selengkapnya >>></h4></a>
			<h4 class="waktu" style="margin-right: 10px;">Waktu : <?php echo $value["tanggal"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<br>
		<hr />
	<?php } ?>
	</ul>

</div>

</div>

<div id="footer">
&copyCopyright 2019 - itera.ac.id
</div>


</body>
</html>