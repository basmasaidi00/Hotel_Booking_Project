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
// Fonction select qui exécute une requête SQL préparée en utilisant des paramètres liés
function select($sql, $values, $dataType) {
  // Récupération de la connexion à la base de données stockée dans une variable globale
  $con = $GLOBALS['con'];

  // Préparation de la requête SQL avec les paramètres fournis
  if ($stmt = mysqli_prepare($con, $sql)) {
      
      // Associe les valeurs des paramètres ($values) à la requête préparée ($stmt)
      // en utilisant les types de données spécifiés par $dataType (ex: 's' pour string, 'i' pour integer).
      mysqli_stmt_bind_param($stmt, $dataType, ...$values);

      // Exécution de la requête SQL préparée
      if (mysqli_stmt_execute($stmt)) {
          
          // Récupère le résultat de la requête exécutée (pour SELECT, SHOW, etc.)
          $res = mysqli_stmt_get_result($stmt);

          // Retourne le résultat à l'appelant (souvent un tableau de données)
          return $res;
      } else {
          // En cas d'échec de l'exécution de la requête, affiche un message d'erreur et arrête le script.
          die("La requête ne peut pas être exécutée");
      }

      // Ferme la requête préparée pour libérer les ressources
      mysqli_stmt_close($stmt);
  } else {
      // Si la préparation de la requête SQL échoue, affiche un message d'erreur et arrête le script.
      die("La requête ne peut pas être préparée");
  }
}

?>