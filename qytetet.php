<?php 
require_once('modeliQytetet.php');

$dhenat=new qytetet();
$qytetet=$dhenat->lexoDhenatCities();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kosova Network</title>
    <link rel="stylesheet" href="css/qytetet.css">
</head>
<body>
<?php include "header.php" ?>

<fieldset id="teksti">
<h1>Discover, <span class="underlined underline-clip">See</span><br>& Learn <span class="underlined underline-mask">New</span><br><span class="underlined underline-overflow">Cultures</span></h1>
</fieldset>

    <div class="Kosova">
    <div class="Qytetet">
        

            <?php
            foreach($qytetet as $key=> $value){

            ?>
            <div class="items">
            <img src="<?php echo $value['foto'] ?>">
            <h4><?php echo $value['emri'] ?></h4><br> 
            <button><a id="ButtonFont" href="news.php" >Visit</a></button>
            </div> 
            <?php
            } 
            ?>
    </div>
</div>
<?php include "footer.html" ?>
    
</body>
</html>
