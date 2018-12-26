<div class="col-sm-3 mb-3" style="">
  <div class="mb-2">
    <a href="index.php" style="font-size: 1.7em; color: #FFF;font-weight: bold;">BXH Bài hát</a>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-1" style="background-color: transparent;font-weight: bold;padding: 0px;">
      <li class="breadcrumb-item"><a href="index.php?vn=Việt Nam">Việt Nam</a></li>
      <li class="breadcrumb-item"><a href="index.php?am=Âu Mỹ">Âu Mỹ</a></li>
      <li class="breadcrumb-item"><a href="index.php?hq=Hàn Quốc">Hàn Quốc</a></li>
    </ol>
  </nav>
  
  <?php
    if(!empty($_GET['vn']) && isset($_GET['vn']))
    {
      $vietnam = addslashes(stripslashes($_GET["vn"]));

      $music->show_topten($vietnam);
    }
    elseif (!empty($_GET['am']) && isset($_GET['am'])) 
    {
      $aumy = addslashes(stripslashes($_GET["am"]));

      $music->show_topten($aumy);
    }
    elseif (!empty($_GET['hq']) && isset($_GET['hq'])) 
    {
      $hanquoc = addslashes(stripslashes($_GET["hq"]));

      $music->show_topten($hanquoc);
    }
    else
    {
      $sql = "SELECT id, numoflisten, song, singer FROM music ORDER BY numoflisten DESC LIMIT 10";
      $music->query($sql);
      $stt = 1;
      while ($data = $music->fetch_assoc())
      {
        echo"<div class='bai-hat-tuan'>";
          echo"<div class='number'>$stt</div>";
          echo"<div class='info'>";
            echo"<div class='title'><a id='id-name' href='music.php?id= $data[id]'>$data[song]</a></div>";
            echo"<div class='singer mb-2'><a id='id-singer' href='music.php?id= $data[id]'>$data[singer]</a></div>";
          echo"</div>";
        echo"</div>";
        $stt++;
      }
    } 
                 
  ?>
           
        </div> 
      </div>
  </div>
</div>
</div>