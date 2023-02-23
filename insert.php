<?php
require_once('modeliUser.php');
if(isset($_POST['save'])){

    $regjistrim=new Useri();

    $regjistrim->setEmri($_POST['emri']);
    $regjistrim->setMbiemri($_POST['mbiemri']);
    $regjistrim->setEmail($_POST['email']);
    $regjistrim->setPassword($_POST['password']);

    $regjistrim->insertoDhenat();

}


?>
<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="css/mySignUpStyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri</label>
                <input type="text" class="inp" name="emri" placeholder="shto emrin..."/>
                <label>Mbiemri</label>
                <input type="text" class="inp" name="mbiemri" placeholder="shto mbiemrin..."/>
                <label>Email</label>
                <input type="email" class="inp" name="email" placeholder="shto email..."/>
                <label>Password</label>
                <input type="password" class="inp" name="password" placeholder="shto password"/>
                <button name='save'>Save</button>
            </form>
        </div>
    </body>
</htm>