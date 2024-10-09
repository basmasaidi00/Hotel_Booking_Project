<?php

require('../composant/db_config.php');
require('../composant/essensials.php');
AdminLogin();
if(isset($_POST['get_general']))
{
    $q= "SELECT * FROM  setting WHERE sr_no=?";
    $values =[1];
    $res= select($q,$values,"i");
  
    $data= mysqli_fetch_assoc($res);
    $json_data=json_encode($data);
    echo $json_data;
}

?>