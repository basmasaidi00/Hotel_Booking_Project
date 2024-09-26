<?php
  require('composant/essensials.php');
  session_start();
  session_destroy();
  redirect('index.php')
?>