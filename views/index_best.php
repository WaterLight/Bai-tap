<div class="mb-3 mt-2">
  <a href="#" style="font-size: 1.7em; color: #FFF;font-weight: bold;">The Best</a>
</div>
  
  <div class="row">
    <?php  
      //Thực hiện truy vấn
      $sql = "SELECT * FROM music WHERE best = 2";
      $music->query($sql);
      $data = $music->fetch_assoc();
    ?>
    <div class="col-sm-5">
      <div class="box">
        <div class="avatar">
          <div class="overload">
            <img src="public/core/<?php echo $data['img']; ?>" alt="" style="width: 326px; height: 307px;">
            <span><i class=" fab fa-google-play fa-2x"></i></span>
          </div>
        </div>
        <div class="name">The Best Of All</div>                
      </div>
    </div>

    <div class="col-sm-7">
      <div class="content">

    <?php  
      $sql = "SELECT * FROM music WHERE best = 1";
      $music->query($sql);
                
      while ($data = $music->fetch_assoc())
      {
        echo"<div class='box'>";
          echo"<div class='avatar'>";
            echo"<div class='overload'>";
              echo"<a href='music.php?id= $data[id]'><img src='public/core/$data[img]' style='width: 140px;height: 130px;'></a>";
              echo"<span><i class=' fab fa-google-play fa-2x'></i></span>";
            echo"</div>";
          echo"</div>";
          echo"<div class='name' style='width:140px;'>The Best Of</div>";            
        echo"</div>";
      }

    ?>

      </div>
    </div>                
  </div>           
</div>          