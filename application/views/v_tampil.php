<!DOCTYPE html>
<html>
<head>
	<title>CRUD Data Mahasiswa Angkatan 2015</title>
</head>
<body>
<center>
	<h1>Membuat CRUD Data Mahasiswa Angkatan 2015</h1>	

<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Gol Darah</th>	
		<th>Aksi</th>
	</tr>
	<?php
	foreach ($mhs as $ang) {
		?>
	<tr>
		<td><?php echo $ang->nim;?></td>
		<td><?php echo $ang->nama;?></td>
		<td><?php echo $ang->jk;?></td>
		<td><?php echo $ang->gol_darah;?></td>
		<td>
			<?php echo anchor('crud/edit/'.$ang->nim,'Edit');?> 
			<?php echo anchor('crud/hapus/'.$ang->nim,'Hapus');?> 	
		</td>
	</tr>	
	<?php } ?>

</table>
<?php echo anchor('crud/tambah','Tambah Data'); ?><br>

<?php echo anchor('crud/tampilgolA','tampilgolA');?><br>
<?php echo anchor('crud/tampilgolB','tampilgolB');?><br>
<?php echo anchor('crud/tampilgolAB','tampilgolAB');?><br>
<?php echo anchor('crud/tampilgolO','tampilgolO');?><br>
</center>
</body>
</html>