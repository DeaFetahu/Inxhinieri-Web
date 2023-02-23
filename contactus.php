<!DOCTYPE html>
<html>
<head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/contactus.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php include "header.html"?>
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
            <p1 style="font-size:35px ;"> <b>Send us a message</b></p1><br> <br>
           <p1 style="font-size:20px ;"><b>Name</b>(required)<br><input type="text" id="emri" style ="height : 40px; width : 300px ;"> <br> <br>
            <p1 style="font-size:20px ;"><b>Email</b>(required)<br><input type="email" id="imella" style ="height : 40px; width : 300px ;"> <br> <br>
           <p1 style="font-size:20px ;"><b>Message</b>(required)<br><textarea type="text" id="mesazh" style ="height : 90px; width : 300px ;"></textarea>
            <br>

            <button id="button" style ="height: 40px ; width : 150px ; border-radius: 10px; background-color:gray">Submit</button>
        </div>
        </div>
        </fieldset>

        <?php include "footer.html" ?>
    </body>
</html> 