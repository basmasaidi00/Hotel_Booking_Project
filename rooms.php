<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS Hotel-Chambres</title>
    <?php require('composant/links.php')?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> 
</head>

<body class="bg-light">
<!--navbar  -->
 <?php require('composant/header.php')?>

<div class="my-5 px-4">
   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> NOS CHAMBRES</h2>
   
   <div class="h-line bg-dark"></div>
  
</div>
<div class="container">
    <div class="row">
        <!--Filtres-->
        <div class="col-lg-3 col-md-12 mb-4 px-lg-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow ">
             <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
             <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
            <div class="collapse navbar-collapse flex-column  mt-2 align-items-stretch" id="filterDropdown">
            <div class="border bg-light  p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">VÉRIFIER LA DISPONIBILITÉ</h5>
                    <label  class="form-label ">Enregistrement </label>
                    <input type="date" class="form-control shadow-none mb-3" >
                    <label  class="form-label ">Départ </label>
                    <input type="date" class="form-control shadow-none" >
            </div>
            <div class="border bg-light  p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">ÉQUIPEMENTS</h5>
                <div class="mb-2">
                    <input type="chekbox"  id="f1" class="form-check-input shadow-none me-1" >
                    <label for="f1" class="form- check-label ">  Premier équipement  </label>
                </div>
                <div class="mb-2">
                    <input type="chekbox"  id="f2" class="form-check-input shadow-none me-1" >
                    <label for="f2" class="form- check-label "> Deuxième équipement  </label>
                </div>
                <div class="mb-2">
                    <input type="chekbox"  id="f3" class="form-check-input shadow-none me-1" >
                    <label for="f3" class="form- check-label ">  Troisième Équipement  </label>
                </div>
                    
            </div>
            <div class="border bg-light  p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">CLIENTS</h5>
                <div class="d-flex">
                   <div class="me-3">
                    <label  class="form-label ">Adultes </label>
                    <input type="number" class="form-control shadow-none mb-3" >
                  </div>
                
                   <div class="mb-2">
                    <label  class="form-label ">Enfants </label>
                    <input type="number" class="form-control shadow-none mb-3" >
                    </div>
                </div>
               
                    
            </div>
           
             </div>
              </div>
         </nav>
       </div>
     
        <div class="col-lg-9 col-md-12 px-4">
          <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-g-0 mb-md-0 mb-3">
               <img src="images/rooms/1.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple nom du chambre</h5> 
                <div class="features mb-3">
                    <h6 class="mb-3"> Fonctionnalités </h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    2 Chambres 
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     1 Toilette
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     1 Balconne
                   </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     3 Canapé
                    </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1"> Équipements </h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    Télévision
                    </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                   AC
                   </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    Radiateur
                   </span>
                </div>
                <div class="guests mb-3">
                  <h6 class="mb-1"> Clients </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap ">
                   5 Adultes
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap ">
                       4 Enfants
                 </span>
        
        
          </div>
              </div>
            <div class="col-md-2 mt-md-0 mt-4 text-center">
              <div class="card-body">
                 <h6 class=" mb-4">20€ par nuit </h6>
                 <a href="#" class="btn btn-sm w-100 text-white  custom-bg shadow-none mb-2">Réservez maintenant</a>
                 <a href="#" class="btn btn-sm  w-100  btn-outline-dark  shadow-none">Plus du détails</a>
            </div>
         </div>
           </div>
          </div>
          <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-g-0 mb-md-0 mb-3">
               <img src="images/rooms/1.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple nom du chambre</h5> 
                <div class="features mb-3">
                    <h6 class="mb-3"> Fonctionnalités </h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    2 Chambres 
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     1 Toilette
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     1 Balconne
                   </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     3 Canapé
                    </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1"> Équipements </h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    Télévision
                    </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                   AC
                   </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    Radiateur
                   </span>
                </div>
                <div class="guests mb-3">
                  <h6 class="mb-1"> Clients </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap ">
                   5 Adultes
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap ">
                       4 Enfants
                 </span>
        
        
          </div>
              </div>
            <div class="col-md-2 mt-md-0 mt-4 text-center">
              <div class="card-body">
                 <h6 class=" mb-4">20€ par nuit </h6>
                 <a href="#" class="btn btn-sm w-100 text-white  custom-bg shadow-none mb-2">Réservez maintenant</a>
                 <a href="#" class="btn btn-sm  w-100  btn-outline-dark  shadow-none">Plus du détails</a>
            </div>
         </div>
           </div>
          </div>
          <div class="card mb-4 border-0 shadow" >
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-g-0 mb-md-0 mb-3">
               <img src="images/rooms/1.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple nom du chambre</h5> 
                <div class="features mb-3">
                    <h6 class="mb-3"> Fonctionnalités </h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    2 Chambres 
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     1 Toilette
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     1 Balconne
                   </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                     3 Canapé
                    </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1"> Équipements </h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    Télévision
                    </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                   AC
                   </span>
                   <span class="badge rounded-pill bg-light text-dark text-wrap ">
                    Radiateur
                   </span>
                </div>
                <div class="guests mb-3">
                  <h6 class="mb-1"> Clients </h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap ">
                   5 Adultes
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap ">
                       4 Enfants
                 </span>
        
        
          </div>
              </div>
            <div class="col-md-2 mt-md-0 mt-4 text-center">
              <div class="card-body">
                 <h6 class=" mb-4">20€ par nuit </h6>
                 <a href="#" class="btn btn-sm w-100 text-white  custom-bg shadow-none mb-2">Réservez maintenant</a>
                 <a href="#" class="btn btn-sm  w-100  btn-outline-dark  shadow-none">Plus du détails</a>
            </div>
         </div>
           </div>
          </div>
        </div>

        


          
            
             
        
        
         </div>
              </div>
          

    </div>
</div>

<!--  Footer -->

<?php require('composant/footer.php')?>

</body>
</html>