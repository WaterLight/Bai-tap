<?php 
  session_start(); 
  require("config/header.php");
?>
    
    <link rel="stylesheet" href="./css/style-header.css">
    <link rel="stylesheet" href="./css/style-content.css">
    <link rel="stylesheet" href="./css/style-footer.css">
    
    <title>Trang chủ</title>
  </head>
  <body>

    <!-- ======================== Header ======================== -->
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #181412; height: 90px; font-family: 'Helvetica', sans-serif;">
    
      <a class="navbar-brand mr-4 ml-3" href="#">
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
          <a class="navbar-brand mx-4" href="#">
            <span class="mr-3" style=" color: #fae639;">
              <i class="fas fa-circle "></i>
            </span>
            Bài hát
          </a>

          <a class="navbar-brand mx-4" href="#">
            <span class="mr-3" style=" color: #9befe0;">
              <i class="fas fa-circle"></i>
            </span>
            Thể loại
          </a>
          
          <?php 
            if(isset($_SESSION["taikhoan"]))
            {
              echo"<a class='navbar-brand mx-4' href='#'>";
                echo"<span class='mr-3' style='' color: #f573a0;'>";
                  echo"<i class='fas fa-circle'> "; 
                  echo"</i>";
                echo"</span>";
                echo "Xin chào ".$_SESSION["taikhoan"].", <a href='logout.php'>(Đăng xuất)</a>";
              echo"</a>";
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
            }      
          ?>

      </nav>      

     </div>

  
  </nav>

  <!-- ======================== Content ======================== -->
    <div class="body">
      <div class="content">

        <div class="player">

          <div class="cover">
            <div class="overlay">
              <img src="./image/play.png" alt="">
            </div>
          </div>

          <div class="title"></div>
          <div class="artist"></div>
          
          <div class="controls">
            <div class="play"></div>
            <div class="pause"></div>
            <div class="rew"></div>
            <div class="fwd"></div>
          </div>
          <div class="volume"></div>
          <div class="tracker"></div>
          
        </div>

        <div class="viewlist" id="style-1">
          <ul class="playlist" style="height: 100%;">

              

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
                        echo"<li audiourl='$data[url]' cover='./cover1.jpg' artist='Imagine Dragons'>";
                          echo"<div class='bai-hat-tuan'>";

                            echo"<div class='number'>$dem</div>";
                            echo"<div class='info'>";
                              echo"<div><a id='id-name' href='#'>$data[tenbh]</a></div>";
                              echo"<div class='singer'><a id='id-singer' href='#'>Ca sĩ : $data[tencs]</a></div>";
                            echo"</div>";
                            echo"<div class='view-count'></div> ";          

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
                    echo"<li audiourl='$data[url]' cover='./cover1.jpg' artist='Imagine Dragons'>";
                        echo"<div class='bai-hat-tuan'>";

                          echo"<div class='number'>$dem</div>";
                          echo"<div class='info'>";
                            echo"<div><a id='id-name' href='#'>$data[tenbh]</a></div>";
                            echo"<div class='singer'><a id='id-singer' href='#'>Ca sĩ : $data[tencs]</a></div>";
                          echo"</div>";
                          echo"<div class='view-count'></div> ";          

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
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.21.custom.min.js"></script>
    
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/content.js"></script>
  </body>
</html>