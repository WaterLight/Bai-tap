          <div class="d-flex">
            <a href="#" style="font-size: 1.7em; color: #FFF;font-weight: bold;margin-right: 10px;">Ablum</a>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="background-color: transparent;font-weight: bold;">
                <li class="breadcrumb-item"><a href="#">Nghe nhiều</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Mới nhất</a></li>
              </ol>
            </nav>
          </div>
          <div class="content">
<?php  
	$sql = "SELECT * FROM music WHERE new = 1";
    $music->query($sql);
                      
    while ($data = $music->fetch_assoc()) 
    {           
      echo"<div class='box'>";
        echo"<div class='avatar'>";
          echo"<div class='overload'>";
            echo"<a href='music.php?id= $data[id]'><img src='public/core/$data[img]' alt=''></a>";
            echo"<span><i class=' fab fa-google-play fa-2x'></i></span>";
          echo"</div>";
        echo"</div>";
        echo"<div class='name'>$data[song]</div>";
          echo"<div class='singer'>$data[singer]</div>";                
      echo"</div>";
    }
?>
</div>