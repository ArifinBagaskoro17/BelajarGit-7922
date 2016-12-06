<?php 

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if (!isset ($_POST['kirim'])){
	exit ('access Forbiden');
}

$siswa = new Siswa();

if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.png')){
	exit('Error upload file');

$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['foto'] = 'img/'.$_POST['in_nis'].'.png';

$siswa->updateSiswa($_POST['in_nis'], $data);


}
print_r($_FILES);

echo "Data siswa berhasil diupdate />";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>";

?>