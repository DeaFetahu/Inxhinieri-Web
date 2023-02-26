<?php
require_once('modeliStay.php');

$dhenat=new stay();
$myId=$_GET['id'];
$records=$dhenat->lexoDhenatSipasIDsEat($myId);
/*
echo "<pre>";
        var_dump($records);
echo"<pre>";
*/
   if(isset($_POST['edit'])){
      
       if($myId==$dhenat->getId()){

        $dhenat->setFoto($_POST['foto']);
        $dhenat->setEmri($_POST['emri']);
        $dhenat->setUrl($_POST['url']);

        echo $dhenat->updateDhenatEat();

        echo
       " <script>
            alert('Te dhenat jane perditesuar me sukses !');
            document.location='displayHome.php';
        </script>";
       }
   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
  

        .container{
            max-width:1200px;
            padding:2rem;
            margin:0 auto;
            
        }
      

        .admin-product form{
            max-width: 50rem;
            margin:0 auto;
            padding:2rem;
            border-radius: .5rem;
            font-size:28px;
            color:black;
            font-family:'Poppins', sans-serif;
            
        }

        .admin-product form h3{
           
            color:lightgreen;
            text-align:center;
            font-family:'Poppins', sans-serif;
            margin-bottom: 1rem;
            font-size:2.5rem;
        }

        .admin-product form .box{
            width:100%;
            border-radius: .5rem;
            border-color:green;
            padding:1.2rem ,1.5rem;
            font-size:1.7rem;
            margin:1rem 0;
            background:beige;
        }



   input[type="submit"] {
    align-items: center;
  background-color: rgb(169, 224, 169);
  border: 1px solid #DFDFDF;
  border-radius: 16px;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: flex;
  font-family: Inter, sans-serif;
  font-size: 18px;
  justify-content: center;
  line-height: 28px;
  max-width: 20%;
  padding: 14px 22px;
  text-decoration: none;
  transition: all .2s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  margin: 10px 240px;
}


input[type="submit"]:hover{
    background-color: rgb(190, 232, 190);
  border-color: rgb(190, 232, 190);;
}
   
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <a href="faza1.php"><span class="logo_name">Kosova Network</span></a>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="displayHome.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="displayCities.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Cities</span>
          </a>
        </li>
        <li>
          <a href="display.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">User Analytics</span>
          </a>
        </li>
        <li>
          <a href="displayContactUs.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="container">
    <div class="admin-product">
    
    <form action method="POST">
        <br>
    <h3>Edit!</h3>
        Name:
        <input type="text" name="emri"  class="box" value="<?php echo $records['emri'];?>">
        <br>
        Photo:
        <input type="text" name="foto" class="box" value="<?php echo $records['foto'];?>">
        <br>
        URL:
        <input type="text" name="url" class="box" value="<?php echo $records['url'];?>">
        <br>
        <input type="submit" name="edit" value="Save" >
    </form>

</div>
</div>

  </section>
    </body>
    </html>

 
