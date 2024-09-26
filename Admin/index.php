<?php 
require('composant/db_config.php');
require('composant/essensials.php');
session_start();
if((isset($_SESSION['adminLogin'])&& $_SESSION['adminLogin']== true)){
  redirect('dashboard.php'); 
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <?php 
   
    require('composant/links.php');?>
</head>
<style>
    /* style admin login pannel*/
div.login-form{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
}
</style>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h5 class=" text-white bg-dark py-2">PANNEAU DE CONNEXION ADMIN</h5>
            <div class="p-4" >
               <div class="mb-3">
                 <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Nom d'Admin" >
               </div>
               <div class="mb-4">
                 <input name="admin_pass"  required type="password" class="form-control shadow-none text-center" placeholder="Mot de Passe">
                </div>
                <button  name="login"type="submit" class="btn text-white custom-bg shadow-none">CONNEXION</button>
            </div>

        </form>
    </div>
    <?php 
      if(isset($_POST['login'])){
        $form_data= filtration($_POST);
        $query = "SELECT * FROM admin_cred WHERE admin_name=? AND admin_pass=?";
        $values=[ $form_data['admin_name'],$form_data['admin_pass']];
        $res = select($query,$values,"ss");
         if($res-> num_rows==1){
           $row= mysqli_fetch_assoc($res);
         
           $_SESSION['adminLogin']=true;
           $_SESSION['adminId']=$row['sr_no'];
           redirect('dashboard.php');
         }else{
          alert('error','Connexion échoué - des coordonnées invalides!');
         }
      }
       

     ?>

  <?php require('composant/scripts.php')?>   
</body>
</html>