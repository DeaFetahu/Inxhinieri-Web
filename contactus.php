<?php
require_once('modelicontactus.php');
if(isset($_POST['submit'])){

    $regjistrimi=new contactus();

    $regjistrimi->setEmri($_POST['emri']);
    $regjistrimi->setEmail($_POST['email']);
    $regjistrimi->setMessage($_POST['message']);

    $regjistrimi->insertoDhenat2();

}



?>
<!DOCTYPE html>
<html>
<head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/contactus.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php include "header.php"?>
        <br>
        <div id="contactP">
        Contact us
        </div>
        <fieldset id="fieldset3">
        <div class="row">
        <div class="column">
          <p1 style="font-size:35px ;"><b> Get in Touch</b></p1><br> <br>
          <p1 style="font-size:20px ;">Qamil Bala St.</p1> <br> <br> 
          <p1 style="font-size:20px ;">Prishtine, Kosove 20000 </p1><br> <br> 
          <p1 style="font-size:20px ;">Email: info@kosovanetwork.com </p1><br> <br> 
          <p1 style="font-size:20px ;"> Tel: (123) 456-7890</p1> <br>
           </div>
           <div class="column">
            <form action="" method="POST">
            <p1 style="font-size:35px ;"> <b>Send us a message</b></p1><br> <br>
           <p1 style="font-size:20px ;"><b>Name</b>(required)<br><input type="text" name="emri" style ="height : 40px; width : 300px ;"> <br> <br>
            <p1 style="font-size:20px ;"><b>Email</b>(required)<br><input type="email" name="email" style ="height : 40px; width : 300px ;"> <br> <br>
           <p1 style="font-size:20px ;"><b>Message</b>(required)<br><textarea type="text" name="message" style ="height : 90px; width : 300px ;"></textarea>
            <br>

            <button id="button" name="submit" style ="height: 40px ; width : 150px ; border-radius: 10px; background-color:gray">Submit</button>
           </form>
        </div>
        </div>
        </fieldset>

        <?php include "footer.html" ?>
    </body>
</html> 