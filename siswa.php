<?php 
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');


$siswa = new Siswa();
$data = $siswa->readAllSiswa();
?>
<h1>DATA SISWA<H1>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach($data as $a): ?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['nationality']?></td>
		<td><a href="dsiswa.php?id=<?php echo $a['id_siswa']?>">Detail</td>
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa']?>">Edit</td>
		<td><a href="delsiswa.php?id=<?php echo $a['id_siswa']?>">Delete</td>
	</tr>
	<?php endforeach?>
</table>