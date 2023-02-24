<?php
require_once('modeliUser.php');

$dhenat=new useri();
$myId=$_GET['id'];
$records=$dhenat->lexoDhenatSipasId($myId);
/*
echo "<pre>";
        var_dump($records);
echo"<pre>";
*/
   if(isset($_POST['edit'])){
      
       if($myId==$dhenat->getId()){

        $dhenat->setEmri($_POST['emri']);
        $dhenat->setMbiemri($_POST['mbiemri']);
        $dhenat->setEmail($_POST['email']);
        $dhenat->setPassword($_POST['password']);

        echo $dhenat->updateDhenat();

        echo
       " <script>
            alert('Te dhenat jane perditesuar me sukses !');
            document.location='display.php';
        </script>";
       }
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri</label>
                <input type="text" class="inp" name="emri"
                    value ="<?php echo $records['emri'];?> "/>
                <label>Mbiemri</label>
                <input type="text" class="inp" name="mbiemri"
                    value ="<?php echo $records['mbiemri'];?> "/>
                <label>Email</label>
                <input type="email" class="inp" name="email"
                    value ="<?php echo $records['email'];?> "/>
                <label>Password</label>
                <input type="password" class="inp" name="password"
                     value ="<?php echo $records['password'];?> "/>
                     <label>Roli</label>
                <input type="text" class="inp" name="roli"
                    value ="<?php echo $records['roli'];?> "/>
                     
                <button name='edit'>Save</button>
            </form>
        </div>
    </body>
</html>