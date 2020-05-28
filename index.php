<?php

$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$http_method = $_SERVER["REQUEST_METHOD"];


if($url_path == '/' && $http_method == 'GET'){
    include('views/login.php');
}

?>