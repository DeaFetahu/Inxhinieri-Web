<?php
require_once('modeliUser.php');
if(isset($_POST['save'])){

    $regjistrim=new Useri();

    $regjistrim->setEmri($_POST['emri']);
    $regjistrim->setMbiemri($_POST['mbiemri']);
    $regjistrim->setEmail($_POST['email']);
    $regjistrim->setPassword($_POST['password']);
    $regjistrim->setRoli($_POST['roli']);

    $regjistrim->insertoDhenat();

}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="css/signin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <?php include "header.php" ?>
        <br>
        <br>
            <fieldset id="fieldset2">
            <form action="" method="post">
                <h1 style="font-size:22px;">Sign up</h1><br>
                Name
                <br><input type="text" id="emri" name="emri" style="height : 30px; width : 250px ;" placeholder="enter your name"><br><br> 
                Surname
                <br> <input type="text" id="password" name="mbiemri" style="height : 30px; width : 250px ;" placeholder="enter your surname"><br><br>
                Email
                <br><input type="email" id="email" name="email" style="height : 30px; width : 250px ;" 
                 placeholder="enter your email" pattern="\S+@\S+\.\S+" tittle="Your email should be of this format: ex.text@text.text"
                 required><br><br>
                Password
                <br><input type="password" name="password" id="psw" style ="height : 30px; width : 250px;  
                " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="
                Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                 placeholder="enter your password" required>
                 <input type="text" id="roli" name="roli" value="user" style="display: none;"> <br> <br>
                <input type="checkbox" id="terms&conditions" tittle="Please agree to our terms and conditions !"required> <p2 style="font-size: 15px;">I agree to terms & conditions</p2> <br><br>
                
                <input type="submit" value="save" name="save"class="form-btn" style ="height: 30px ; width : 250px ; border-radius: 20px; background-color:rgb(151, 222, 151); border:rgb(151, 222, 151) ;"/>
                <br>
                <br>
                <p1 id="p1">Already have an account? <a id="Login" href="account.php">Log in</a></p1>
            </form>
            </fieldset>
            <br>
            <br>
            <br>
            <?php include "footer.html" ?>
            
    </body>
</html> 




