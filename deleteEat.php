<?php
require_once('modeliStay.php');

$dhena=new stay();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenatEat($myId);
}

?>