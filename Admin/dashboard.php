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
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">BS WEBSITE</h3>
        <a href="logout.php" class="btn btn-light btn-sm">Déconnexion</a>
        
    </div>
    <div class="col-lg-2 bg-dark border-top border-3 border-secondary "id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark   ">
             <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">PANNEUX D'ADMIN</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse flex-column  mt-2 align-items-stretch" id="adminDropdown">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                  <a class="nav-link text-white " aria-current="page" href="dashboard.php">Tableaux de Bord</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#">Chambres</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#">Utilisateurs</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link text-white" href="#">Paramétres</a>
                  </li>
                </ul>
           
             </div>
              </div>
         </nav>
    </div>
    

<?php require('composant/scripts.php') ; ?>
</body>
</html>