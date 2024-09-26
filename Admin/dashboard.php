<?php
require('composant/essensials.php');
AdminLogin();
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
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0">PANNEAU D'ADMIN</h3>
        <a href="logout.php" class="btn btn-light btn-sm">Déconnexion</a>
        
    </div>
    

<?php require('composant/scripts.php') ; ?>
</body>
</html>