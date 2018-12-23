<?php

//require_once 'vendor/autoload.php';

$headers = array('Accept' => 'application/json');
$query = array('foo' => 'hello', 'bar' => 'world');

$response = Unirest\Request::post('http://mockbin.com/request', $headers, $query);

print $response->code;        // HTTP Status code
var_dump($response->headers);     // Headers


?>