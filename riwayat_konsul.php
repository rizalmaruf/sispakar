<?php
include '4admin/koneksi.php';
?>
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Peternak</th>
                </tr>
            </thead>
            <tbody>
                <?php
					$sql = "SELECT ah.*, s.*
					FROM analisa_hasil ah
					join solusi s on s.kd_penyakit=ah.kd_solusi
					ORDER BY ah.id DESC";
					$qry = mysqli_query($koneksi,$sql)
					or die ("Query Hasil salam".mysqli_error());
				while ($data=mysqli_fetch_array($qry)){?>
                <tr>
                        <td><a href="?page=result&id=<?php echo $data['id'];?>"><?php echo $data['id'] ?></a></td>
                        <td><?php echo $data['nama'] ?></td>
                </tr>
				<?php } ?>
            </tbody>
        </table>
    </div>
</div>