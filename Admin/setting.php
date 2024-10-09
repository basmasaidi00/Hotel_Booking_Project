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
    <title>Page de Paramètres</title>
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
                  <h3 class="mb-4">PARAMÈTRES</h3>
                  <!-- Section des Paramètres Généraux-->
                  <div class="card" >
                    <div class="card-body">
                        <div class="d-flex ailgn-items-center  justify-content-between mb-3">
                            <h5 class="card-title m-0">Paramètres Généraux</h5>
                            <button type="button" class="btn btn-dark shadow-non btn-sm" data-bs-toggle="modal" data-bs-target="#general-setting">
                            <i class="bi bi-pencil-square"></i> Modifier
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Titre du Site</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">À propos de nous </h6>
                        <p class="card-text" id="site_about"></p>
                        
                    </div>
                    
                  </div>
 
                  <!-- Section des Paramètres Modal-->
                  <div class="modal fade" id="general-setting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                       <div class="modal-dialog">
                          <form >
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h1 class="modal-title " >Paramètres Généraux</h1>
                              </div>
                              <div class="modal-body">
                                 <div class=" mb-3">
                                     <label  class="form-label">Titre du Site </label>
                                     <input type="text" name="site-title" id="site_title_inp" class="form-control shadow-none" >
                                 </div>
                                 <div class=" mb-3">
                                     <label  class="form-label">À propos de nous </label>
                                     <textarea class="form-control shadow-none"  id="site_about_inp"name="site-about" rows="6"></textarea>
                                 </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" onclick="resetModalValues()" class="btn text-secondary shadow-none" data-bs-dismiss="modal">ANNULER</button>
                              <button type="button" class="btn custom-bg text-white shadow-none ">SOUMETTRE</button>
                              </div>
                           </div>
                         </form>
                        </div>
                 </div>

            </div>
        </div>
    </div>
<?php require('composant/scripts.php') ; ?>
<script>
    let general_data;
    function get_general(){
        let site_title=document.getElementById('site_title');
        let site_about=document.getElementById('site_about');

        let site_title_inp=document.getElementById('site_title_inp');
        let site_about_inp=document.getElementById('site_about_inp');

        let xhr= new XMLHttpRequest();
        xhr.open("POST", "ajax/setting_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        xhr.onload =function(){
            general_data = JSON.parse(this.responseText);
            console.log(general_data);

            site_title.innerText= general_data.site_title;
            site_about.innerText= general_data.site_about;

            site_title_inp.value= general_data.site_title;
            site_about_inp.value= general_data.site_about;

        }


        xhr.send(('get_general'));
    }
       function resetModalValues() {
      // Restaurer les valeurs des champs d'entrée à partir de general_data
       document.getElementById('site_title_inp').value = general_data.site_title;
          document.getElementById('site_about_inp').value = general_data.site_about;
}



       window.onload=function(){
        get_general();
       }   
</script>
</body>
</html>