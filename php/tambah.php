<?php
include ('koneksi.php');
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$tanggungan = $_POST['tanggungan'];
$penghasilan = $_POST['penghasilan'];

$sql="INSERT INTO calonpenerima (nama,usia,tanggungan,penghasilan) VALUES('$nama','$usia','$tanggungan','$penghasilan')";
// echo $sql;
$proses = mysqli_query($config,$sql);
if (!$sql) {
    echo '<script language="javascript">
                window.alert("Data Gagal Ditambah");
                window.location.href="../tambah.php";
             </script>';
} else {
    echo '<script language="javascript">
                window.alert("Data Berhasil");
                window.location.href="../index.php";
             </script>';
}

?>