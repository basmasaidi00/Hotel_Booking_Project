<?php

$hname='localhost';
$uname='root';
$pass='';
$db='hbproject';


 $con = mysqli_connect($hname,$uname,$pass,$db);
 if(!$con){
    die("cannot connect to database.". mysqli_connect_error());

 }
 function filtration($data){
    foreach($data as $key =>$value){
        $data[$key]=trim($value);
        $data[$key]=stripcslashes($value);
        $data[$key]=htmlspecialchars($value);
        $data[$key]=strip_tags($value);

    }
  return $data;
 }
 function select($sql,$values, $dataType){
   $con =$GLOBALS['con'];
   if($stmt = mysqli_prepare($con,$sql))
   {
       mysqli_stmt_bind_param($stmt,$dataType,...$values);
       if(mysqli_stmt_execute($stmt)){
       $res= mysqli_stmt_get_result($stmt);
       return $res;
       }else{
        die("query cannot be execued");
       }
       mysqli_stmt_close($stmt);
   }else{
    die("query cannot be prepared");
   }
 }
?>