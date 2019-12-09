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
                <form role="form" action="php/tambah.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="ntext" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usia</label>
                        <input type="number" min="1" name="usia" class="form-control" id="exampleInputEmail1" placeholder="Masukan Usia">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggungan</label>
                        <input type="number" name="tanggungan" min="1" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah Tanggungan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penghasilan</label>
                        <input type="number" name="penghasilan" min="1" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah Penghasilan">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" name="Tambah" value="tambah">
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>

<?php
include ('template/footer.php');
?>