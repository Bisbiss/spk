<?php
include ('template/header.php');
include ('php/koneksi.php');
$sql = mysqli_query($config, "Select * from calonpenerima");
// $akses = mysqli_fetch_array($sql); 
?>

<!DOCTYPE html>
<html lang="en">
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                <h3 style="float:left">Data Calon Penerima | </h3>
                <a href="proses.php" ><img src="dist/img/proses.png" width="4%" ></a>
                <a href="tambah.php" style="float:right"><img src="dist/img/tambah.svg" width="5%" style="float:right"></a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Penghasilan</th>
                        <th>Tanggungan</th>
                    </tr>
                    <?php
                        $no = 1;
                        while($akses = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $akses['nama']; ?></td>
                        <td><?php echo $akses['usia']; ?></td>
                        <td><?php echo $akses['penghasilan']; ?></td>
                        <td><?php echo $akses['tanggungan']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</html>

<?php
include ('template/footer.php');
?>