<?php
require_once('modelicontactus.php');

$dhena=new contactus();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenat2($myId);
}

?>