<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location:account.php");
}else{
    if($_SESSION['roli']=="user"){
        header("location:faza1.php");
    }else{
    
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/style.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Kosova Network</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="faza1.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">News</span>
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

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Views</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Clicks</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Contact</div>
          <div class="sales-details">
          <ul class="details">
            <li class="topic">Date</li>
            <li><a href="#">01 Feb 2023</a></li>
            <li><a href="#">02 Feb 2023</a></li>
            <li><a href="#">03 Feb 2023</a></li>
            <li><a href="#">05 Feb 2023</a></li>
            <li><a href="#">07 Feb 2023</a></li>
            <li><a href="#">09 Feb 2023</a></li>
            <li><a href="#">10 Feb 2023</a></li>
            <li><a href="#">16 Feb 2023</a></li>
             <li><a href="#">21 Feb 2023</a></li>
          </ul>
            <ul class="details">
            <li class="topic">User</li>
            <li><a href="#">Andi Musmurati</a></li>
            <li><a href="#">Rrita Shaqiri</a></li>
            <li><a href="#">Sonata Jakupi</a></li>
            <li><a href="#">Edon Xani</a></li>
            <li><a href="#">Bleon Murtezaj</a></li>
            <li><a href="#">Riga Maksuti</a></li>
            <li><a href="#">Erin Mustafa</a></li>
            <li><a href="#">Robert Nikolla</a></li>
             <li><a href="#">Bato Maca</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Action</li>
            <li><a href="#">Read</a></li>
            <li><a href="#">Read</a></li>
            <li><a href="#">Read</a></li>
            <li><a href="#">Edited</a></li>
            <li><a href="#">Edited</a></li>
            <li><a href="#">Read</a></li>
            <li><a href="#">Read</a></li>
             <li><a href="#">Edited</a></li>
            <li><a href="#">Edited</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">204</a></li>
            <li><a href="#">255</a></li>
            <li><a href="#">288</a></li>
            <li><a href="#">166</a></li>
            <li><a href="#">556</a></li>
            <li><a href="#">495</a></li>
            <li><a href="#">733</a></li>
             <li><a href="#">253</a></li>
             <li><a href="#">452</a></li>
          </ul>
          </div>
         
        </div>
</section>


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
<?php
    }
}
?>



