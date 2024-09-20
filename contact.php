<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS Hotel-Contact</title>
    <?php require('composant/links.php')?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> 
</head>

<body class="bg-light">
<!--navbar  -->
 <?php require('composant/header.php')?>

<div class="my-5 px-4">
   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> CONTACTEZ-NOUS</h2>
   
   <div class="h-line bg-dark"></div>
   <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Dolor iusto dolorum repellendus, <br>labore ratione itaque quas id quos amet dignissimos?
    </p>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class=" bg-white rounded shadow p-4 ">
             <iframe height="320px" class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.920206466327!2d-5.813427825257717!3d35.77733637255643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f55ae68f6fb%3A0x325bb656018052cc!2sHotel%20Chellah!5e0!3m2!1sfr!2sma!4v1726595849774!5m2!1sfr!2sma"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <h5>Adresse</h5>
               <a href="https://maps.app.goo.gl/i2ZxmHUxCkHxN45F9"target ="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                  <i class="bi bi-geo-alt-fill"></i>  BS Hotel 
               </a>
               <h5 class=" mt-4"> Appelez-Nous</h5>
                <a href="tel:0645678899" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i> 0645678899</a>
                    <br>
                <a href="tel:0645678899" class="d-inline-block mb-2 text-decoration-none text-dark">
                 <i class="bi bi-telephone-fill"></i> 0645678899</a>
                 <h5 class="mt-4">Email</h5>
                  <a href="mailto:bs@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                  <i class="bi bi-envelope-fill"></i> bs@gmail.com</a>

                  <h5 class=" mt-4"> Suivez-Nous</h5>
                  <a href="#" class="d-inline-block  text-dark fs-5 me-2">
                    <i class="bi bi-twitter-x me-1"></i> </a>
                  <a href="#" class="d-inline-block  text-dark fs-5 me-2">
                    <i class="bi bi-facebook me-1"></i></a> 
                  <a href="#" class="d-inline-block  text-dark fs-5 ">
                   <i class="bi bi-instagram me-1"></i></a>
                  
            </div>
        </div>
        <div class="col-lg-6 col-md-6  px-4">
            <div class=" bg-white rounded shadow p-4 ">
               <form >
                   <h5>Envoyer un message</h5>
                   <div class="mb-3">
                      <label  class="form-label">Nom </label>
                      <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Email</label>
                      <input type="email" class="form-control shadow-none" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Objet </label>
                      <input type="text" class="form-control shadow-none" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Message </label>
                      <textarea class="form-control shadow-none " rows="5" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class=" btn btn-dark shadow-none custom-bg mt-3">ENVOYER</button>

               </form>
            </div>

        </div>
   
    </div>
</div>

<!--  Footer -->

<?php require('composant/footer.php')?>

</body>
</html>