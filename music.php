<?php 
  session_start(); 
  require("config/header.php");
?>
    
    <link rel="stylesheet" href="./css/style-header.css">
    <link rel="stylesheet" href="./css/music-content.css">
    <link rel="stylesheet" href="./css/style-footer.css">
    <!-- Audio Player CSS & Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!-- end Audio Player CSS & Scripts -->
    
    <title>Trang chủ</title>
  </head>
  <body>

    <!-- ======================== Header ======================== -->
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #181412; height: 90px; font-family: 'Helvetica', sans-serif;">
    
      <a class="navbar-brand mr-4 ml-3" href="index.php">
        <img src="./image/logo.png"  alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="form-inline my-2 my-lg-0 " action="index.php" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Tìm" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
        name="ok">Tìm kiếm</button>
      </form>
    
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Image and text -->
        <nav class="navbar navbar-dark" style="background-color: #181412;">

        <div class="navbar-brand ml-4 mr-3 d-flex" style="" href="#">
            <span class="" style=" color: #9befe0;margin-top: 7px;">
              <i class="fas fa-circle"></i>
            </span>
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle abc" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Thể loại
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Pop</a>
                <a class="dropdown-item" href="#">HipHop</a>
                <a class="dropdown-item" href="#">Rock</a>
                <a class="dropdown-item" href="#">Balad</a>
              </div> 
            </div>           
          </div>
                  
          <a class="navbar-brand mx-4" href="#">
            <span class="mr-3" style=" color: #fae639;">
              <i class="fas fa-circle "></i>
            </span>
            Bài hát
          </a>
          
          <?php 
            if(isset($_SESSION["taikhoan"]))
            {
                echo"<a class='navbar-brand mx-4' href='./login.php'>";
                  echo"<span class='mr-3' style=' color: #f573a0;'>";
                    echo"<i class='fas fa-circle'>"; 
                    echo"</i>";
                  echo"</span>";
                  echo "PlayList";
                echo"</a>";
              echo "</nav>";
              echo "</div>";

              echo "<div class='info-user'>";
                echo "<div class='dropdown' style='background-color: #181412;'>";
                  echo "<button class= 'btn btn-secondary dropdown-toggle abc' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                  echo $_SESSION["taikhoan"]." ";
                  echo "</button>" ;

                  echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
                    echo "<a class='dropdown-item' href='profile.php'>Thông tin cá nhân</a>";
                    echo "<a class='dropdown-item' href='logout.php'>Nhạc yêu thích</a>";
                    echo "<a class='dropdown-item' href='logout.php'>Playlist của tôi</a>";
                    echo "<a class='dropdown-item' href='logout.php'>Nghe gần đây</a>";
                    echo "<a class='dropdown-item' href='logout.php'>Đăng xuất</a>";
                  echo "</div>";
                echo "<div>";   
              echo "</div>";
            }
            else
            {             
              echo"<a class='navbar-brand mx-4' href='./login.php'>";
                echo"<span class='mr-3' style=' color: #f573a0;'>";
                  echo"<i class='fas fa-circle'>"; 
                  echo"</i>";
                echo"</span>";
                echo "Đăng nhập";
              echo"</a>";
              echo "</nav>";
              echo "</div>";
            }      
          ?>
  </nav>

  <!-- ======================== Content ======================== -->
    <div class="body">
      <div style="background: rgb(0,0,0);background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 0%);width: 100%;height: 100%;">
      <div style="height: 20px; width: 100%"></div>
      <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="player mb-2">
            <div style="background: rgb(0,0,0);background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 0%);width: 100%;height: 100%;">

            <div class="audio-player">
              <h1>Demo - Preview Song</h1>
                <img class="cover" src="./image/slider.jpg" alt="">
                <audio id="audio-player" src="./mp3/05.mp3" type="audio/mp3" controls="controls"></audio>
            </div>

            </div>
          </div>

          <div class="viewlist" id="style-1">
            <ul class="playlist">             

                <?php  
                  if (isset($_REQUEST['ok'])) 
                  {
                    // Gán hàm addslashes để chống sql injection
                    $timkiem = addslashes($_GET['timkiem']);
   
                    // Nếu $timkiem rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                    if (empty($timkiem)) 
                    {
                      echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
                    } 
                    else
                    {
                      // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                      $sql = "SELECT * FROM baihat WHERE tenbh LIKE '%$timkiem%' OR tencs LIKE '%$timkiem%' OR tenns LIKE '%$timkiem%' OR quocgia LIKE '%$timkiem%' OR theloai LIKE '%$theloai%' ";
   
                      // Kết nối sql
                      require("config/connect.php");
                      // Thực thi câu truy vấn
                      $kq = mysqli_query($conn,$sql);
   
                      // Đếm số dòng trả về trong sql.
                      $num = mysqli_num_rows($kq);
   
                      // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                      if ($num > 0 && $timkiem != "") 
                      {
                        // Dùng $num để đếm số dòng trả về.
                        echo "<p style='color:#0000FF;'>$num kết quả trả về với từ khóa <b>$timkiem</b></p>";
                        $dem=1;
                        while ($data = mysqli_fetch_assoc($kq))
                        {
                          echo"<li audiourl='$data[url]' cover='./slider.jpg' artist='Alan Walked'>";
                            echo"<div class='bai-hat-tuan'>";

                              echo"<div class='number'>$dem</div>";
                              echo"<div class='info'>";
                                echo"<div><a id='id-name' href='#'>$data[tenbh]</a></div>";
                                echo"<div class='singer'><a id='id-singer' href='#'>$data[tencs]</a></div>";
                              echo"</div>";
                              echo"<div><i class='fas fa-plus'></i></div> ";          

                            echo"</div>";
                          echo"</li>";
                          $dem++;
                        }
                      }                 
                      else 
                      {
                        echo"<p style='color:red;'>* Không tìm thấy kết quả!;</p>";
                      } 

                      //Đóng kết nối với CSDL
                      mysqli_close($conn);
                    }
                  }
                  else
                  {
                    //Mở kết nối với CSDL
                    require("config/connect.php");
                    //Thực hiện truy vấn
                    $sql = "SELECT * FROM baihat WHERE capnhat = 1";
                    $kq = mysqli_query($conn,$sql);
                    
                    $dem=1;  
                    while ($data = mysqli_fetch_assoc($kq)) 
                    {
                      echo"<li audiourl='Faded' cover='./slider.jpg' artist='Alan Walked'>";
                          echo"<div class='bai-hat-tuan'>";

                            echo"<div class='number mr-3'>$dem</div>";
                            echo"<div class='info'>";
                              echo"<div><a id='id-name' href='#'>$data[tenbh]</a></div>";
                              echo"<div class='singer'><a id='id-singer' href='#'>$data[tencs]</a></div>";
                            echo"</div>";
                            echo"<div><i class='fas fa-heart mr-4'></i> <i class='fas fa-plus mr-4'></i> <i class='fas fa-arrow-down'></i> </div> ";          

                          echo"</div>";
                        echo"</li>";
                        $dem++;
                    }
                    mysqli_close($conn);
                  }
              ?>  
            </ul>
            <div class="force-overflow"></div>
          </div>
        </div>
        <div class="col-sm-3">
          abc
        </div>
      </div>
      </div>
      <div style="height: 20px; width: 100%"></div>s    
    </div>


  <!-- ======================== Footer ======================== -->
  
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #181412;font-family: 'Helvetica',sans-serif; height: 40px;">
    
      <a class="navbar-brand ml-5" style="color: #fff; opacity: .4; font-size: .8em;" href="">
        Copyright 2018 Personal NP
      </a>

      <div class="collapse navbar-collapse footer-left " id="navbarSupportedContent">
        <!-- Image and text -->
        <nav class="navbar navbar-dark" style="background-color: #181412; height: 40px; margin-left: 66%;">
          <a class="navbar-brand mx-4" style="font-size: .9em;" href="#">            
            Get Personal
          </a>
          <a class="navbar-brand mx-4" style="font-size: .9em;" href="#">            
            Legal
          </a>
          <a class="navbar-brand mx-4" style="font-size: .9em;" href="#">            
            Cookies
          </a>
        </nav>     
      </div> 

  </nav>  
  
  <div class="go-home fixed-bottom" style="bottom: 1rem; left: 94%;">
    <a href="./index.php"><i class="fas fa-home fa-3x " style="color: #3ea24c;"></i></a>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      $(document).ready(function() {
          $('#audio-player').mediaelementplayer({
              alwaysShowControls: true,
              features: ['playpause','volume','progress'],
              audioVolume: 'horizontal',
              audioWidth: 400,
              audioHeight: 120
          });
      });
    </script>
    
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/content.js"></script>
  </body>
</html>