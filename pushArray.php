<?php 
$arrayData = [
    [
        "id" => 1,
        "name" => "Ferney",
        "email" => "ferney@150porciento.com",
        "email_verified_at" => null,
        "created_at" => "2022-01-04T12:23:13.000000Z",
        "updated_at" => "2022-01-13T12:23:13.000000Z",
    ],
    [
        "id" => 2,
        "name" => "Juan",
        "email" => "correo@correo.com",
        "email_verified_at" => null,
        "created_at" => "2022-01-11T12:23:50.000000Z",
        "updated_at" => "2022-01-13T12:23:50.000000Z",
    ],
    [
        "id" => 3,
        "name" => "María",
        "email" => "correo2@correo.com",
        "email_verified_at" => null,
        "created_at" => "2022-01-13T12:24:25.000000Z",
        "updated_at" => "2022-01-13T12:24:25.000000Z",
    ]
];
$a = array("subcribed_at"=>date("Y-m-d H:i:s"));
foreach ($arrayData as $key => $array) {
    $array['subcribed_at'] = date("Y-m-d H:i:s");
    array_push($array);
}
echo "<pre>";
var_dump($arrayData);


?>
