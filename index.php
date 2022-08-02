<?php
session_start();
if (!isset($_SESSION['username'])){
  include "atas.php";
}
else{include "atas1.php"; }?>

<div class="container">
      <!-- Membuat row untuk dibagikan menjadi kolom -->
      <div class="row">
        <?php include"kiri.php"; ?>

        <!-- Membuat kolom dengan ukuran 9 grid -->
        <div class="col-md-9">
          <?php 
          include "conf/inc.program.php";
           ?>
        </div>

        
        
</div>
<hr>
<div id="footer">
      <div class="container">
        <p class="text-center">&copy; Sistem Pakar Sapi</p>
      </div>
</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>