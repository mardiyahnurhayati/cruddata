<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<center>
	<form action="<?php echo base_url(). 'crud/update';?>" method="post">
		<?php 
			foreach($mhs as $ang) {
		?>
		<table style="margin:20px auto">
			<tr>
				<td>NIM</td>
				<td><input type="hidden" name="nim" value="<?php echo $ang->nim?>"></input>	
				
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $ang->nama?>"></input></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk" value="<?php echo $ang->jk?>"></input></td>
			</tr>
			<tr>
				<td>Golongan Darah</td>
				<td><input type="text" name="goldar" value="<?php echo $ang->gol_darah?>"></input></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></input></td>
			</tr>
		</table>
		</form>
		<?php } ?>
</center>
</body>
</html>