<?php
require_once('modeliStay.php');

$dhena=new qytetet();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenat2($myId);
}

?>