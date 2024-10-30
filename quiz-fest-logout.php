<?php
  session_start();

//var at=gpai.auth2.getAuthInstance();
//at.signOut();

  session_destroy();
  
  echo "<script> location.href='quizfest-registration-login-page.php';</script>"


?>