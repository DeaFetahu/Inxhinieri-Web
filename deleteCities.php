<?php
require_once('modeliHome.php');

$dhena=new qytetet();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenat2($myId);
}

?>