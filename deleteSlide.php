<?php
require_once('modeliSlideshow.php');

$dhena=new slideshow();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenatS($myId);
}

?>