<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
        <link rel="stylesheet" href="css/news.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
   <?php include "header.html"?>
        <hr>
        <br>

        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 4</div>
              <img src="fotot/Malet_e_Rugoves.jpg" style="width:100%">
              <div class="text"><h1 style="color:white">Rugova radhitet si qendra e katërt kryesore për sporte dimërore nga Federata Ndërkombëtare e Siktarisë (FIS) me qendrën në Lucernë.</h1></div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 4</div>
              <img src="fotot/Kamenica.jpg" style="width:100%">
              <div class="text"><h1 style="color:white">Microsoft i bëri komentimë kësaj fotoje pasi qe dukej si home page në Windows XP por kjo fushë  gjindet në Kamenicë.</h1></div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 4</div>
              <img src="fotot/shpella-gadime.jpg" style="width:100%">
              <div class="text"><h2 style="color:white">Shpella e Gadimes</h2>
                <h3 style="color:white">Kristalet te rralla qe gjenden në këtë shpellë nuk gjenden në shumë vende botërore prandaj këto kristale kanë vlerë evropiane,nga madhësia e rritjes së kristalit në një cm për 30,000 vjet kjo rrjedh se shpella është e vjetër 80,000vjet.</h3></div>
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="fotot/KosovaMirusha.jpg" style="width:100%">
                <div class="text"><h1 style="color:white">Ujëvarat e Mirushës janë pjesë e një parku me rëndësi të veçantë natyrore, shkencore, kulturore dhe turistike.</h1></div>
              </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
          </div>

          <br>
          <br>



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
        <?php include "footer.html"?>
        <script src="myscript.js"></script>
    </body>
</html> 