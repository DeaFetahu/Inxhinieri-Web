<?php 
session_start();
$hide="";
if(!isset($_SESSION["email"])){
  header("location:account.php");
 } else{
    if($_SESSION['roli']=="admin"){
    $hide="";
  }else{
    $hide="hide";
  }

require_once('modeliStay.php');

$dhenat=new stay();
$stay=$dhenat->lexoDhenatStay();
$eat=$dhenat->lexoDhenatEat();
$do=$dhenat->lexoDhenatDo();

?>

<!DOCTYPE html>
<html>
<head>
        <title>Kosova Network</title>
        <link rel="stylesheet" href="css/faza1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php include "header.php"?>
        <main class="mainHome">
           <div class="container">
            <img id="fotoHome" src="fotot/backgroundHome1.jpg" style="width:100%;">
            <div class="centered"><b>Kosova Network</b></div>
          </div>
          <br><br>
          <h1 style="height: 50px;background-color: rgb(166, 231, 160) ;"></h1>
          <br>
          <br><br>
          <br><br>
             <p1 style="margin-left:17% ; font-family:'Poppins',sans-serif; color: gray; font-size: 30px;"> Kosovo is a small state but with astonishing and amazing places in it</p1><br>
             <p2 style="margin-left:21% ; font-family:'Poppins',sans-serif; color: gray; font-size: 30px;">below are just some of the beautiful things our Kosova offers </p2>
           <br>
          <br>
          <br>
            
          <div class="row">
            <div class="column">
              <div class="container1">
              <img src="fotot/food.jpg" alt="food"  class="image">
              <div class="middle">
              <div class="text">Food</div>
              </div>
              </div>
              </div>

            <div class="column">
              <div class="container1">
              <img src="fotot/foto1.1.jpg" alt="Travel" class="image">
              <div class="middle">
                <div class="text">Travel</div>
            </div>
            </div>
            </div>
            <div class="column">
              <div class="container1">
              <img src="fotot/fotoo5.jpg" alt="Fun" class="image">
              <div class="middle">
                <div class="text">Fun</div>
                </div>
                </div>
                </div>
          </div>
          </main>
          <br>
          <br>
          <br>
          <br>
          <h1 style="height:10px ;background-color: rgb(166, 231, 160); width: 100%;"></h1>
          <br>
          <br>
          <h1 id="explore">Explore <span style="color: rgb(110, 227, 110);"> Kosovo</span></h1> 
           <br> <br><br>


         
          <div class="responsive1">
            <div style="width:70%" class="gallery">
             
              <div class="desc1"><h1 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; margin-top: -5%; margin-left: -90%; ">Stay</h1></div>
              <h2 style="color: rgb(84, 77, 77); font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: medium; margin-left: 3%;">Can't-miss spots to dine, drink, and feast</h2>
            </div>
          </div>
          <div class="Eat">
          <?php
                      foreach($stay as $key=> $value){
        
                      ?>
                        <div class="responsive">
                          <div class="gallery">
                            <a target="_blank" href="<?php echo $value['url'] ?>">
                              <img src="<?php echo $value['foto'] ?>" alt="" width="600" height="400">
                            </a>
                            <div class="desc"><?php echo $value['emri'] ?></div>
                          </div>
                        </div>
                  <?php
                  } 
                  ?>

               
            </div>
            <div class="clearfix"></div>
            <br><br><br>



          <div class="responsive1">
            <div style="width:70%" class="gallery">
             
              <div class="desc1"><h1 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; margin-top: -5%; margin-left: -90%; ">Eat</h1></div>
              <h2 style="color: rgb(84, 77, 77); font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: medium; margin-left: 3%;">Can't-miss spots to dine, drink, and feast</h2>
            </div>
          </div>
          <div class="Eat1">

                  <?php
                      foreach($eat as $key=> $value){
        
                      ?>
                        <div class="responsive1">
                          <div class="gallery1">
                            <a target="_blank" href="<?php echo $value['url'] ?>">
                              <img src="<?php echo $value['foto'] ?>" alt="<?php echo $value['emri'] ?>" width="600" height="400">
                            </a>
                            <div class="desc1"><?php echo $value['emri'] ?></div>
                          </div>
                        </div>
                  <?php
                  } 
                  ?>
           
            </div> 
            <div class="clearfix1"></div>
            <br><br><br>



            <div class="responsive2">
              <div style="width:70%" class="gallery">
               
                <div class="desc2"><h1 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; margin-top: -5%; margin-left: -90%; ">Do</h1></div>
                <h2 style="color: rgb(84, 77, 77); font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: medium; margin-left: 5%;">Places to see, ways to wander, and signature experiences</h2>
              </div>
            </div>
            <div class="Eat2">

            <?php
                      foreach($do as $key=> $value){
        
                      ?>
                        <div class="responsive2">
                          <div class="gallery2">
                            <a target="_blank" href="<?php echo $value['url'] ?>">
                              <img src="<?php echo $value['foto'] ?>" alt="<?php echo $value['emri'] ?>" width="600" height="400">
                            </a>
                            <div class="desc2"><?php echo $value['emri'] ?></div>
                          </div>
                        </div>
                  <?php
                  } 
                  ?>
        
              </div>
              <div class="clearfix2"></div>
      <br>
      <br>
      <?php include "footer.html"?>
      <?php
      if(isset($_SESSION['email'])) {
        echo "<script>
        let accountLink = document.getElementById('accountLink');
        accountLink.href = 'logout.php';
        accountLink.innerText = 'Logout';
        </script>";
      }
       ?>
    </body>
</html> 
<?php
}
?>