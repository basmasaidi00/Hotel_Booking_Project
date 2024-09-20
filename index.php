<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS Hotel</title>
    <?php require('composant/links.php')?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> 
</head>

<body class="bg-light">
<!--navbar  -->
 <?php require('composant/header.php')?>

<!-- Image:carousel -->
<div class="container-fluid px-lg-4  mt-4 ">
    <!-- Swiper -->
  <div class="swiper swiper-container  ">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png  " class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png"class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png"class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png"class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png"class="w-100 d-block" />
      </div>
  </div>
  <!-- Swiper JS -->
</div>
<!--Formulaire de vérification de disponibilité-->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-13  bg-white shadow p-4 rounded">
      <h5 class="mb-3"> Vérifier la disponibilité de la réservation</h5>
      <form >
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label  class="form-label " style="font-weight: 500;">Enregistrement </label>
          <input type="date" class="form-control shadow-none" >
          </div>
          <div class="col-lg-3 mb-3">
          <label  class="form-label " style="font-weight: 500;">Départ </label>
          <input type="date" class="form-control shadow-none" >
          </div>
          <div class="col-lg-3 mb-3">
            <label  class="form-label " style="font-weight: 500;">Adulte </label>
            <select class="form-select shadow-none" >
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label  class="form-label " style="font-weight: 500;">Enfant </label>
            <select class="form-select shadow-none" >
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2 ">
            <button type="submit" class=" btn text-white shadow-none custom-bg">Submit </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- les chambres  -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> NOS CHAMBRES</h2>
<div class="container">
  <div class="row">
 <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow " style="max-width: 350px; margin:auto;">
  <img src="images/rooms/1.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Nom simple de chambre</h5>
    <h6 class=" mb-4">20€ par nuit </h6>
      <div class="features mb-4">
        <h6 class="mb-1"> Fonctionnalités </h6>
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
      <div class="facilities mb-4">
         <h6 class="mb-1"> Equipements </h6>
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
      <div class="guests mb-4">
         <h6 class="mb-1"> Clients </h6>
         <span class="badge rounded-pill bg-light text-dark text-wrap ">
           5 Adultes
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
           4 Enfants
        </span>
        
        
      </div>
    <div class="rating mb-4">
      <h6 class="mb-1"> Rating </h6>
      <span class="badge rounded-pill bg-light ">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      </span>
     
    </div>
  <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white  custom-bg shadow-none">Réservez maintenant</a>
    <a href="#" class="btn btn-sm    btn-outline-dark  shadow-none">Plus du détails</a>
    </div>
  
  </div>
   </div>

 </div>


 <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow " style="max-width: 350px; margin:auto;">
  <img src="images/rooms/1.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Nom simple de chambre</h5>
    <h6 class=" mb-4">20€ par nuit </h6>
      <div class="features mb-4">
        <h6 class="mb-1"> Fonctionnalités </h6>
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
      <div class="facilities mb-4">
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
      
      <div class="guests mb-4">
         <h6 class="mb-1"> Clients </h6>
         <span class="badge rounded-pill bg-light text-dark text-wrap ">
           5 Adultes
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
           4 Enfants
        </span>
        
        
      </div>
    <div class="rating mb-4">
      <h6 class="mb-1"> Rating </h6>
      <span class="badge rounded-pill bg-light ">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      </span>
     
    </div>
  <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white  custom-bg shadow-none">Réservez maintenant</a>
    <a href="#" class="btn btn-sm    btn-outline-dark  shadow-none">Plus du détails</a>
    </div>
  
  </div>
   </div>

 </div>


 <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow " style="max-width: 350px; margin:auto;">
  <img src="images/rooms/1.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Nom simple de chambre</h5>
    <h6 class=" mb-4">20€ par nuit </h6>
      <div class="features mb-4">
        <h6 class="mb-1"> Fonctionnalités </h6>
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
      <div class="facilities mb-4">
         <h6 class="mb-1"> Equipements </h6>
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
      <div class="guests mb-4">
         <h6 class="mb-1"> Clients </h6>
         <span class="badge rounded-pill bg-light text-dark text-wrap ">
           5 Adultes
        </span>
        <span class="badge rounded-pill bg-light text-dark text-wrap ">
           4 Enfants
        </span>
        
        
      </div>
    <div class="rating mb-4">
      <h6 class="mb-1"> Rating </h6>
      <span class="badge rounded-pill bg-light ">
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      <i class="bi bi-star-fill text-warning"></i>
      </span>
     
    </div>
  <div class="d-flex justify-content-evenly mb-2">
    <a href="#" class="btn btn-sm text-white  custom-bg shadow-none">Réservez maintenant</a>
    <a href="#" class="btn btn-sm    btn-outline-dark  shadow-none">Plus du détails</a>
    </div>
  
  </div>
   </div>

 </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Plus de chambres >>></a>
  </div>
  




</div>

<!-- les équipements  -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> NOS ÉQUIPEMENTS</h2>
<div class="cintainer">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Tele.svg" width="80px">
      <h5 class="mt-3">Télévision</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/climat.svg" width="80px">
      <h5 class="mt-3">Clime</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/chaudiere.svg" width="80px">
      <h5 class="mt-3">Chaudière</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Massage.svg" width="80px">
      <h5 class="mt-3">Massage</h5>
    </div>
  </div>
   <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Plus des équipements >>></a>
    </div>

</div>
   

<!-- les témoignages  -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> TÉMOIGNAGES</h2>
<div class="container mt-5">

  <!-- Swiper -->
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/about/star.svg" width="30px" >
          <h6 class=" m-0 ms-2">Utlisateur 1</h6>
        </div>
        <p>
        Très facile à utiliser, le processus de réservation est rapide et clair.
        Les informations sur les chambres et les services sont bien détaillées, 
        et les options de paiement sont pratiques. Je recommande cette plateforme 
        pour sa simplicité et son efficacité !
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/about/star.svg" width="30px" >
          <h6 class=" m-0 ms-2">Utlisateur 1</h6>
        </div>
        <p>
        Très facile à utiliser, le processus de réservation est rapide et clair.
        Les informations sur les chambres et les services sont bien détaillées, 
        et les options de paiement sont pratiques. Je recommande cette plateforme 
        pour sa simplicité et son efficacité !
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/about/star.svg" width="30px" >
          <h6 class=" m-0 ms-2">Utlisateur 1</h6>
        </div>
        <p>
        Très facile à utiliser, le processus de réservation est rapide et clair.
        Les informations sur les chambres et les services sont bien détaillées, 
        et les options de paiement sont pratiques. Je recommande cette plateforme 
        pour sa simplicité et son efficacité !
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/about/star.svg" width="30px" >
          <h6 class=" m-0 ms-2">Utlisateur 1</h6>
        </div>
        <p>
        Très facile à utiliser, le processus de réservation est rapide et clair.
        Les informations sur les chambres et les services sont bien détaillées, 
        et les options de paiement sont pratiques. Je recommande cette plateforme 
        pour sa simplicité et son efficacité !
        </p>
        <div class="rating">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    
    
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> En Savoir Plus>>></a>
  </div>
  </div>
  <!-- Swiper JS -->
</div>

<!--  Contacter nous -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> NOUS CONTACTER</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white  rounded">
      <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.920206466327!2d-5.813427825257717!3d35.77733637255643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f55ae68f6fb%3A0x325bb656018052cc!2sHotel%20Chellah!5e0!3m2!1sfr!2sma!4v1726595849774!5m2!1sfr!2sma"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
     <div class="bg-white p-4 rounded mb-4">
       <h5> Appelez-Nous</h5>
       <a href="tel:0645678899" class="d-inline-block mb-2 text-decoration-none text-dark">
       <i class="bi bi-telephone-fill"></i>0645678899</a>
        <br>
        <a href="tel:0645678899" class="d-inline-block mb-2 text-decoration-none text-dark">
       <i class="bi bi-telephone-fill"></i>0645678899</a>
     </div>
     <div class="bg-white p-4 rounded mb-4">
       <h5> Suivez-Nous</h5>
       <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
        <span class="badge bg-light text-dark  fs-6 p-2">
        <i class="bi bi-twitter-x me-1"></i>Twitter-X</span>
       </a>
      
        <br>
        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
        <span class="badge bg-light text-dark  fs-6 p-2">
        <i class="bi bi-facebook me-1"></i>Facebook</span>
       </a>

        <br>
        <a href="#" class="d-inline-block ">
        <span class="badge bg-light text-dark  fs-6 p-2">
        <i class="bi bi-instagram me-1"></i>Instagram</span>
       </a>
       
     </div>    
    </div>
  </div>
</div>
<!--  Footer -->


<?php require('composant/footer.php')?>


<br><br><br>
<br><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container ", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay:3500,
        disableOnInteraction:false,
      }
    });

    // swiper pour le témoignage
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:3,
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:2,
        },
        1024:{
          slidesPerView:3,
        },

      }
    });
  </script>
</body>
</html>