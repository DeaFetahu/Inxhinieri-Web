<?php
require_once('modeliSlideshow.php');

$dhenat=new slideshow();
$allData=$dhenat->lexoDhenatS();

?>
   <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
          
    .styled-table {
    border-collapse: collapse;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;.
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

#a1 {
  padding-top: 100px;
  padding-left: 7vw;
  z-index: -1;
  margin-right:50px;
}
/*Butoni */
.button-46 {
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
  margin: 10px 370px;
}

.button-46:active,
.button-46:hover {
  outline: 0;
}

.button-46:hover {
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
          <a href="displaySlide.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">News</span>
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

    <div id="a1">
      <a id="butoni " href="createSlide.php"><button class="button-46" role="button">Add slides</button></a> <br><br>
<table class="styled-table">
<thread>
        <tr>
            <th>Foto</th>
            <th>Text1</th>
            <th>Text2</th>
            <th>Action</th>
        </tr>
        </thread>
        <tbody>
        <tr>
          <?php
          foreach($allData as $key=> $value){

          ?>
            <td><?php echo $value['foto']?></td>
            <td><?php echo $value['teksti1']?></td>
            <td><?php echo $value['teksti2']?></td>
            <td id='de'><a href="deleteSlide.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
               <a href="editS.php?id=<?php echo $value['id']?>"><button id='e'>EDIT</button></td></a>
        </tr>
      <?php
      }
      ?>
      </section>
      </tbody>
</table>
</div>
  </section>
    </body>
    </html>

