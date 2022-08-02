<?php include "4admin/koneksi.php"; ?>
      <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Sistem Pakar Diagnosa Penyakit Sapi</h3>
            </div>
              <div class="panel-body">
                <p class="text-justify">
                Selamat Datang di Sistem Pakar Diagnosis Penyakit Sapi. Hewan sapi merupakan salah satu mamalia yang cukup rentan terkena penyakit. Banyak keluhan dari para peternak tentang virus dan wabah yang menyerang hewan ternak mereka. Minimnya pengetahuan para peternak tentang pengetahuan cara perawatan sapi. Terbatasnya informasi dan biaya konsultasi menyebabkan kesadaran peternak terhadap kesehatan Sapi.
                </p>
                <p class="text-center"><a class="btn btn-warning btn-md" href="?page=consultation" role="button" style="background-color: #E74418" >Start Consultation</a></p>
              </div>
      </div>

      <div class="list-group">
        <?php $sql="select * from artikel order by id desc LIMIT 4";
        $rs=mysqli_query($koneksi,$sql);
        while($row=mysqli_fetch_array($rs)){ ?>
          <a href="<?php echo $row['url']; ?>" class="list-group-item">
          <h4 class="list-group-item-heading"><?php echo $row['judul']; ?></h4>
          <img style="float:left;margin-right:20px;"src="news/<?php echo $row['foto']; ?>" class="image-rounded" width="170" height="120"/>
          <p class="list-group-item-text-justify">
          <p style="text-align: justify;"><?php echo substr($row['isi'],0,500); ?></p>
          </p>
          </a>
          <?php } ?>
      </div>
      