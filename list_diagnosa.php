<?php
include '4admin/koneksi.php';
$kode = $_GET['kode'];
$no = '';
?>
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-dark">
            <thead>
                <?php if($kode == 'gejala'){?>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Gejala</th>
                    <th scope="col">Nama Gejala</th>
                    <th scope="col">Tindakan</th>
                </tr>
                <?php }else{?>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Penyakit</th>
                    <th scope="col">Nama Penyakit</th>
                    <th scope="col">Solusi</th>
                    <th scope="col">Definisi</th>
                    <th scope="col">Tindakan</th>
                </tr>
                <?php }?>
            </thead>
            <tbody>
                <?php if($kode == 'gejala'){
                $no = 1;
                $sql_gejala = "SELECT gejala.* FROM gejala order by gejala.kd_gejala";
                $qry_gejala = mysqli_query($koneksi,$sql_gejala);
                $data=mysqli_fetch_array($qry_gejala);
                while ($data=mysqli_fetch_array($qry_gejala)){?>
                <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['kd_gejala'] ?></td>
                        <td><?php echo $data['nm_gejala'] ?></td>
                        <td><a href="?page=edit&id=<?php echo $data['kd_gejala'];?>&kode=gejala">edit</a>
                        <a href="?page=hapus&id=<?php echo $data['kd_gejala'];?>&kode=gejala"> hapus</a></td>
                </tr>
                <?php }}else{
                $no = 1;
                $sql_solusi = "SELECT solusi.* FROM solusi order by solusi.kd_penyakit";
                $qry_solusi = mysqli_query($koneksi,$sql_solusi);
                while ($data=mysqli_fetch_array($qry_solusi)){?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['kd_penyakit'] ?></td>
                    <td><?php echo $data['nm_penyakit'] ?></td>
                    <td><?php echo $data['solusi'] ?></td>
                    <td><?php echo $data['definisi'] ?></td>
                    <td><a href="?page=edit&id=<?php echo $data['kd_penyakit'];?>&kode=penyakit">edit</a>
                    <a href="?page=hapus&id=<?php echo $data['kd_penyakit'];?>&kode=penyakit"> hapus</a></td>
                </tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
</div>