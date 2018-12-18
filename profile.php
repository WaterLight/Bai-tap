<?php 
  session_start(); 
  require("config/header.php");
?>
    
    <link rel="stylesheet" href="./css/style-header.css">

    <link rel="stylesheet" href="./css/style-footer.css">
    <link rel="stylesheet" href="./css/style-profile.css">
    
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
              <a class="btn btn-secondary dropdown-toggle abc" href="./admin/admin.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <div class="overlay">  
        <div class="info">
          <div class="name">Admin <a href="#">Free</a></div>
          <div class="position">Tài khoản miễn phí</div>
          <div class="option">
            <a href="#">Đăng kí VIP</a>
            <a href="#">Thông tin tài khoản</a>
            <a href="#">Thay ảnh nền</a>
          </div>
        </div>    
      </div>
      <div class="content">
        <div class="container">
          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Thông tin tài khoản</div>
            </div>
            <div class="col-sm-6">
              <div>
                <form class="form-inline">
                <label class="sr-only" for="inlineFormInputName2">Name</label>
                <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Họ và tên">              
                <button type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
              </form>
              </div>
              <div>
                  <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Giới tính">              
                  <button type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>
              </div>
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Địa chỉ">              
                  <button type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>
              </div>

              
            </div>
          </div>

          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Bảo vệ tài khoản</div>
            </div>
            <div class="col-sm-6">
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Nhập mật khẩu cũ"> 
                </form>
              </div>
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Nhập mật khẩu mới">
                </form>
              </div>
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Nhập lại mật khẩu">
                  <button type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Đổi mật khẩu</button>
                </form>
              </div>
            </div>

          </div>

          <div class="row" style="color: #fff;">
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <div>Tài khoản kết nối</div>
            </div>
            <div class="col-sm-6">
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Facebook">              
                  <button type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>
              </div>
              <div>
                <form class="form-inline">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2 pr-5" id="inlineFormInputName2" placeholder="Gmail">              
                  <button type="submit" class="btn btn-secondary mb-2" style="background-color: #203149;font-size: 13px;
    border-color: #203149;">Thay đổi</button>
                </form>
              </div>      
            </div>
          </div>

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
  
  <div class="go-home fixed-bottom" style="bottom: 1rem; left: 94%;">
    <a href="./index.php"><i class="fas fa-home fa-3x " style="color: #3ea24c;"></i></a>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/content.js"></script>
  </body>
</html>