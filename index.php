<?php
include './controllers/Api.php';

$api = new Api();

$obj = $api->index();

$json = json_encode($obj);

echo $json;
