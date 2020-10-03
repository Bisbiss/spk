<?php
include ('koneksi.php');
$ekstensi_diperbolehkan	= array('png','jpg');
$nama = $_FILES['foto']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];	

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){			
    move_uploaded_file($file_tmp, '../file/'.$nama);
    $query = mysqli_query($config, "INSERT INTO berkas VALUES(NULL, '$nama')");
    if($query){
        echo 'FILE BERHASIL DI UPLOAD';
    }else{
        echo 'GAGAL MENGUPLOAD GAMBAR';
    }
}else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}

?>