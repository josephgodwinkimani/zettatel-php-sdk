<?php

require 'vendor/autoload.php';

$userId = 'xxxxx';
$apiKey = 'xxxxx';
$password = 'xxxxx';
$senderid = 'Notify_MSG';

$Zettatel = new Gkimani\ZettatelPhpSdk\Zettatel($userId, $password, $apiKey, $senderid);

if (isset($_POST['submit'])) {
    global $Zettatel;
    $mobile = $_POST['mobile'];
    $sms = $Zettatel->sms();
    $response = $sms->send([
        'mobile' => $mobile,
        'msg' => 'Welcome to Awesome Company',
    ]);
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($response);
}
