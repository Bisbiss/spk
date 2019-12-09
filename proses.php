<?php
include ('template/header.php');
include ('php/koneksi.php');
$sql = "SELECT * FROM calonpenerima";
$data = mysqli_query($config,$sql);
?>

<!DOCTYPE html>
<html lang="en">
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header">
                <h3 style="float:left">Data Calon Penerima </h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Penghasilan</th>
                        <th>Tanggungan</th>
                        <th>Hasil</th>
                    </tr>
                    <?php
                        $no = 1;
                        while($akses = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $akses['nama']; ?></td>
                        <td><?php echo $akses['usia']; ?></td>
                        <td><?php echo $akses['penghasilan']; ?></td>
                        <td><?php echo $akses['tanggungan']; ?></td>
                        <td>
                        <?php
                        // Usia
                            if ($akses['usia']<=30) {
                                $nk = 0;
                            } else if($akses['usia']>30 && $akses['usia']< 60 ){
                                $nk = ($akses['usia']-30)/30;
                            }else{
                                $nk = 1;
                            }
                            // echo $nk;
                            // echo "|";
                        // Penghasilan
                            if ($akses['penghasilan']<=500000) {
                                $nkp = 1;
                            } else if($akses['penghasilan']<2000000 && $akses['penghasilan']>500000  ){
                                $nkp = (2000000-$akses['penghasilan'])/1500000;
                            }else{
                                $nkp = 0;
                            }
                            // echo $nkp;
                            // echo "|";
                        // Tanggungan
                            if ($akses['tanggungan']<=5) {
                                $nkt = 0;
                            } else if($akses['tanggungan']>5 && $akses['tanggungan']<8  ){
                                $nkt = ($akses['tanggungan']-5)/3;
                            }else{
                                $nkt = 1;
                            }
                            // echo $nkt;

                        // Nilai Minimum
                            if ($nk <= $nkp && $nk <= $nkt) {
                                $min = $nk;
                            } else if($nkp <= $nk && $nkp <= $nkt) {
                                $min = $nkp;
                            }else{
                                $min = $nkt;
                            }
                            
                            if ($min >0) {
                                echo "Dapat Donasi";
                            } else {
                                echo "Tidak Dapat";
                            }
                            
                        ?>
                        </td>
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