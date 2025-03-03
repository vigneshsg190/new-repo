<?php
$url = "https://67864db5f80b78923aa64b7b.mockapi.io/name";

if (isset($_POST["name"])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    }
    $data = [
        "name" => $name,
        "address" => $address,
        ];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);

$response = curl_exec($ch);
curl_close($ch);


echo $response;