<?php
include ('template/header.php');
include ('php/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                <h3 style="float:left">Tambah Data Calon Penerima</h3>
            </div>
            <div class="card-body">
                <form role="form" action="php/upload.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Foto</label>
                        <input type="file" name="foto"  class="form-control">
                    </div>
                    <div class="form-grup">
                        <input type="submit" class="btn btn-info" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>
