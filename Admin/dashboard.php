<?php
require('composant/essensials.php');
AdminLogin();/*cette fonction  empêche un utilisateur d'accéder
 à la page dashboard.php sans être authentifié */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panneau d'administrateur</title>
    <?php
    require('composant/links.php');
    ?>
</head>
<body class="bg-light">
<?php
    require('composant/header.php');
    ?>
    
     <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

            </div>
        </div>
     </div>
<?php require('composant/scripts.php') ; ?>
</body>
</html>