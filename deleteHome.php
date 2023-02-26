<?php
require_once('modeliHome.php');

$dhena=new home();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenat2($myId);
}

?>