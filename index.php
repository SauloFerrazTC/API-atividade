<?php 

    // a api só aceita json como entrada
    header ("Content-Type: application/json");

    require ("vendor/autoload.php");

    // aqui capturamos o método e o que está na url após o host:porta/
    $method = $_SERVER ["REQUEST_METHOD"];
    $url = $_SERVER ["REQUEST_URI"];

    // terá que ser criado um if ou elif com um switch interno para cada método (post, get, put, delete)
    if ($method == "POST") {

        // pode haver várias operações com o método post, cada uma delas será um case
        switch ($url) {

            case "/login" : 

        }
    } else {
        $response = [
            "status" => 405,
            "message" => "Metodo $method nao permitido"
        ];
        header ("HTTP/1.0 405 Method Not Allowed");
        echo (json_encode ($response));
    }
?>