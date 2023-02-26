<?php
require_once('modeliDashboard.php');

$dhena=new dashboard1();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenat2($myId);
}

?>