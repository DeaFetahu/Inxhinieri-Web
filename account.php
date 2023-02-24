<?php
session_start();
require_once('modeliUser.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        echo "<script>alert('Please fill out the fields.'); </script>";
    } else {
        // Check for user
        $sql = "SELECT * FROM useri WHERE email=:email AND password=:password";
        
        $query = $link->connectDB()->prepare($sql);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if($result){
            $_SESSION["roli"] = $result["roli"];
            $_SESSION["email"] = $result["email"];

            if($_SESSION["roli"] == "admin"){
                header("Location: dashboard.php");
                exit;
            } else if($_SESSION["roli"] == "user"){
                header("Location: faza1.php");
                exit;
            }
        } else {
            echo "<script>alert('Your account doesn't exist.'); </script>";
            header("Location: account.php");
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
        <title>Account</title>
        <link rel="stylesheet" href="css/account.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
   <?php include "header.php" ?>
        <br>
            <fieldset id="fieldset">
                <form  action="" method="POST" name="form1">
                <h1 style="font-size:22px; text-align: left;">Log in </h1>
                Email 
                <br><input type="email" id="email" name="email" style ="height : 30px; width : 250px ;" pattern="\S+@\S+\.\S+" tittle="Your email should be of this format: ex.text@text.text"required>
                <br><br>
                Password
                <br><input type="password" name="password" id="psw" style ="height : 30px; width : 250px;  " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="
                Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <br><br>
                <input type="checkbox" id="terms&conditions" tittle="Please agree to our terms and conditions !"required> <p2 style="font-size: 15px;">I agree to terms & conditions</p2> <br><br>
                <input type="submit" value="Log in" name="login" class="form-btn" style ="height: 30px ; width : 250px ; border-radius: 20px; background-color:rgb(151, 222, 151);"/>
                <br>
                <br>
                <p1 id="p1">Don't have an account? <br> <a id="signIn" href="insert.php">Sign up</a></p1>
            </form>
            </fieldset>
        <br>
        <br>
        <br>
        <?php include "footer.html"?>
    </body>
  
</html> 

