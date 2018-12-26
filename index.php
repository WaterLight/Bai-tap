<?php 
  session_start();
  include("views/link_css.php"); 
  include("views/header.php");
  include("views/index_content.php");
  include("models/m_music.php");
  $music = new music();
?>
<title>Trang chủ | Pornhub.com</title>
<?php
  if (isset($_REQUEST['ok'])) 
  {
    include("views/index_search.php");
  }
  else
  {
    include("views/index_new.php");
    include("views/index_best.php");
    include("views/index_topten.php");
  }
  include("views/footer.php");
?>      