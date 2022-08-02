<?php include "4admin/koneksi.php"; ?>
<div class="alert alert-info"><h4>Artikel Kesehatan Terbaru</h4></div>
      <div class="list-group">
        <?php $sql="select * from artikel order by id desc LIMIT 10";
        $rs=mysqli_query($koneksi,$sql);
        while($row=mysqli_fetch_array($rs)){ ?>
          <a href="?page=read&id=<?php echo $row[0]; ?>" class="list-group-item">
          <h4 class="list-group-item-heading"><?php echo $row['judul']; ?></h4>
          <img style="float:left;margin-right:20px;"src="news/<?php echo $row['foto']; ?>" class="image-rounded" width="170" height="120"/>
          <p class="list-group-item-text-justify">
          <?php echo substr($row['isi'],0,500); ?>
          </p>
          </a>
          <?php } ?>
      </div>