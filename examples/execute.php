<?php

require 'vendor/autoload.php';

use Gkimani\ZettatelPhpSdk;

$userId = "ghateam";
$apiKey = "01bfac991f3097230232e8b7bb8bcb6a9f6854a2";
$password = "Vm2YPfS8";
$senderid = "Notify_MSG";

$Zettatel = new Gkimani\ZettatelPhpSdk\Zettatel($userId, $password, $apiKey, $senderid);

if(isset($_POST['submit'])){
    global $Zettatel;
    $mobile = $_POST['mobile'];
    $sms = $Zettatel->sms();
    $response = $sms->send(array(
        "mobile" => $mobile,
        //"from" => "AT2FA",
        "msg" => "Welcome to Awesome Company",
    ));
    header("Content-Type: application/json; charset=UTF-8");
    echo json_encode($response);
};

?>