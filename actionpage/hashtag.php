<?php
include("../classes/clsInstagram.php");

if($_POST['action'] == "gethashtags") {
    $instagramAcc = new clsInstagram();

    $instagramAcc->gethashtag($_POST['Id']);
    //echo json_encode($_POST['Id']);
    // echo $count;
}