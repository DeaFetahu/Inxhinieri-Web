<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="news.css">
    </head>
    <body >

        <header class="header1">
            <li>
           <img id= "logo" src="logo2.png" />
            </li>
            <ul>
                    <li><a href="faza1.html">Home</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="Aboutus.html">About us</a></li>
                    <li><a href="contactus.html">Contact us</a></li>
                    <li><a href="account.html">Account</a></li>
            </ul>
        </header>
        <hr>
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
        <?php 

        $qytetet=array ("Gjilani"=>"Gjilan is the eighth largest city in Kosovo and seat of Gjilan Municipality 
        and Gjilan District. It is located in the southeastern part of Kosovo, the region of Anamorava. 
        Its geographic position makes it possible to make good connections with other centers of Kosovo and the region ", "Prishtina"=>"Prishtina is the 
        capital and largest city of Kosovo. The city's municipal boundaries in Prishtina District form the largest urban center in Kosovo. 
        After Tirana, Pristina has the second largest population of ethnic Albanians and speakers of the Albanian language. ", "Ferizaji"=>"Ferizaj is the
         sixth largest city in Kosovo by population and seat of Ferizaj Municipality and Ferizaj District. Ferizaj is located in the south-eastern part of Kosovo, 
         about halfway between the cities of Prishtina and Skopje. ", "Gjakova"=>"Gjakova is the seventh largest city of Kosovo and seat of Gjakova Municipality 
         and Gjakova District. The city has 40,827 inhabitants, while the municipality has 94,556 inhabitants.
         Geographically, it is located in the south-western part of Kosovo, about halfway between the cities of Peja and Prizren.
          ","Mitrovica"=>"Mitrovica is a city and municipality located in Kosovo. Settled on the banks of Ibar and Sitnica rivers, 
          the city is the administrative center of the District of Mitrovica. The city of Mitrovica in 2011 had 84,235 inhabitants,
           71,909 of which were living in the southern municipality, while 12,326 in North Mitrovica municipality","Peja"=>"Peja 
         is the fourth largest city of Kosovo and seat of Peja Municipality and Peja District. It is situated in the region of
          Rugova on the eastern section of the Accursed Mountains along Peja's Lumbardh in the western part of Kosovo.","Prizreni"=>"Prizren 
         is the second most populous city and municipality of Kosovo and seat of the eponymous municipality and district.
          It is located on the banks of the Prizren River between the foothills of the Sharr Mountains in southern Kosovo. 
          Prizren experiences an oceanic climate under the influence of the surrounding mountains.", "null"=>"" );
        echo $qytetet [$_POST["qyteti"]];
        ?>
        </div>
        </fieldset>
        <br>
        <div class="footer">
            <div class="footer-bottom">
                +38349xxxxxx; info@kosovanetwork.com
                <br>
                &copy; KosovaNetwork.com | Designed by Students
            </div>
        </div>
    </body>
</html> 