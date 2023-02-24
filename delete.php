<?php
require_once('modeliUser.php');

$dhena=new useri();

if(isset($_GET['id'])){

    $dhena->setId($_GET['id']);
    $myId=$dhena->getId();

    $dhena->deleteDhenat($myId);
}

?>