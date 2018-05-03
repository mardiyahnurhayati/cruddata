<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10" align="center">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Gol Darah</th>	
	</tr>
	<?php
	foreach ($data as $ang) {
		?>
	<tr>
		<td><?php echo $ang['nim'];?></td>
		<td><?php echo $ang['nama'];?></td>
		<td><?php echo $ang['jk'];?></td>
		<td><?php echo $ang['gol_darah'];?></td>
		
	</tr>	
	<?php } ?>
	

</table>
<p align="center"><?php echo anchor('crud/index','Kembali'); ?></p>
</body>
</html>