<?php

require_once('modeliSlideshow.php');

$dhenat=new slideshow();
$slide=$dhenat->lexoDhenatS();


?>


<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
        <link rel="stylesheet" href="css/news.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

* {box-sizing:border-box}


.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}


.mySlides {
  display: none;
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}



.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
        </style>
    </head>
    <body >
   <?php include "header.php"?>
   <br>
        <hr>
        <br>

        <div class="slideshow-container">
        <?php
                      foreach($slide as $key=> $value){
        
                      ?>
            <div class="mySlides fade">
              <img src="<?php echo $value['foto'] ?>" style="width:100%; height:25%">
              <div class="text"><h2 style="color:white"><?php echo $value['teksti1'] ?></h2>
              <h3 style="color:white"><?php echo $value['teksti2'] ?></h3></div>
            </div>
            <?php
                  } 
                  ?>
        
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
         
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
          </div>

          <br>
          <br>
          <br><br>

        <fieldset id ="fieldsetQyetet">
        <h3 style="color:Black">Down below you can type the name of a city (part of Kosovo) for whom you want to know more about !</h3>
        <h4 style="color:grey">Please make sure you write the names correctly (ex. Prizreni, Gjakova, Gjilani etc)</h4>
        
        <form action="news.php" method="post">
        <input type ="text" name="qyteti" style="height : 30px; width : 250px ;"><br><br>
        <input type="submit" style="height: 20px; width:100px">
        </form>
        <br><br>
        <div class="divQytetet">
        <?php error_reporting(0);

        $qyteti=$_POST["qyteti"];
        switch($qyteti){
            case "Gjilani":
                echo "Gjilan is the eighth largest city in Kosovo and seat of Gjilan Municipality 
                and Gjilan District. It is located in the southeastern part of Kosovo, the region of Anamorava. 
                Its geographic position makes it possible to make good connections with other centers of Kosovo and the region ";
                break;
            case "Prishtina":
                echo "Prishtina is the 
                capital and largest city of Kosovo. The city's municipal boundaries in Prishtina District form the largest urban center in Kosovo. 
                After Tirana, Pristina has the second largest population of ethnic Albanians and speakers of the Albanian language.";
                break;
            case "Ferizaji":
                echo "Ferizaj is the
                sixth largest city in Kosovo by population and seat of Ferizaj Municipality and Ferizaj District. Ferizaj is located in the south-eastern part of Kosovo, 
                about halfway between the cities of Prishtina and Skopje.";
                break;
            case "Gjakova":
                echo "Gjakova is the seventh largest city of Kosovo and seat of Gjakova Municipality 
                and Gjakova District. The city has 40,827 inhabitants, while the municipality has 94,556 inhabitants.
                Geographically, it is located in the south-western part of Kosovo, about halfway between the cities of Peja and Prizren.";
                break;
            case "Mitrovica":
                echo "Mitrovica is a city and municipality located in Kosovo. Settled on the banks of Ibar and Sitnica rivers, 
                the city is the administrative center of the District of Mitrovica. The city of Mitrovica in 2011 had 84,235 inhabitants,
                 71,909 of which were living in the southern municipality, while 12,326 in North Mitrovica municipality";
                 break;
            case "Peja":
                echo "Peja 
                is the fourth largest city of Kosovo and seat of Peja Municipality and Peja District. It is situated in the region of
                 Rugova on the eastern section of the Accursed Mountains along Peja's Lumbardh in the western part of Kosovo.";
                 break;
            case "Prizreni":
                echo "Prizren 
                is the second most populous city and municipality of Kosovo and seat of the eponymous municipality and district.
                 It is located on the banks of the Prizren River between the foothills of the Sharr Mountains in southern Kosovo. 
                 Prizren experiences an oceanic climate under the influence of the surrounding mountains.";
                 break;
            default:
            echo "Invalid city name ! Make sure you are spelling it correctly and that it is part of Kosovo.";
        }

        ?>
        </div>
        
        </fieldset>
<br>
        
        <br>
        <?php include "footer.html"?>
        <script>
            let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
        </script>
    </body>
</html> 