<?php 
  session_start(); 
  include("models/m_user.php");
  include("views/link_css.php");
?>   
<title>Trang cá nhân</title>
<?php 
  include("views/header.php");
  include("views/profile_body.php");
  include("views/profile_content.php");
  include("views/footer.php");
?>