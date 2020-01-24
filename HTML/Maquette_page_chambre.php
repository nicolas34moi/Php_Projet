<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Maquette_page_chambre.css">
  </head>
  <?php
  $prix ='200';
  $description="Sèche-Cheveux
Connexion internet avec ADSL
Salle de bain avec douche
Dispositif pour l'auto-échauffementet l'air conditionné
Frigobar
Ligne de téléphone directe
Tv Satellitaire";
  ?>
  <body>
    <div class="stickymain">
      <div class="sticky">
        <div class="logo">
          <a href="#"> <h1>Montpellier Sud Neptune</h1></a>
        </div>
          <div class="admin">
              <a href="Maquette_page_admin.php" class="button">
              ADMINISTRATEUR </a>
        </div>
      </div>
    </div>
    <div class="main">
    <div class="mySlides fade">
         <img src="images\image1.jpeg" class="backgrounddefilement1" >
    </div>
    <div class="mySlides fade">
  <img src="images\image2.jpg" class="backgrounddefilement1" >
    </div>
    <div class="mySlides fade">
  <img src="images\image3.jpg" class="backgrounddefilement1" >
    </div>
    <br>
    </div>
    <div class="dotmain">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <div class="vente">
   <div id="menu">
     <div class="tarif_de_nuit">
            <h1><?= $prix .'€' ?> </h1>
         <p>pour 1 chambre pour 1 nuit
             taxes et frais compris</p>
            </div>
            <div class="reservation">
              <button class="button">RESERVER</button>
            </div>
       </div>
       </div>

    <script>
        let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); // Change d'image tous les 3 seconds
    }
    </script>


<div class="description">
  <h1>description</h1>
    <?= $description  ?>
</div>

  <footer>
      <h1> FOOTER </h1>
  </footer>
  </body>
</html>
