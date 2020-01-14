<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="maquette_page_chambre.css">
  </head>
  <body>
    <div class="stickymain">
      <div class="sticky">
        <div class="logo">
          <a href="#"> <h1>Montpellier Sud Neptune</h1></a>
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
            <h1>200€ </h1>
         <p>pour 1 chambre pour 1 nuit
             taxes et frais compris</p>
            </div>
            <div class="reservation">
              <button class="button">RESERVER</button>
            </div>
       </div>
       </div>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
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
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
</div>
  <footer>
      <h1> FOOTER </h1>
  </footer>
  </body>
</html>
