<?php 
  session_start(); 
  include("views/link_css.php");
  include("models/m_music.php");
  $music = new music();
?>
<title>Âm nhạc</title>
<?php 
  include("views/header.php");
  include("views/mylist_content.php");
  include("views/music_body.php");
  include("views/footer.php");
?>