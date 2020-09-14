<?php

require __DIR__ . '/vendor/autoload.php';

use Laminas\Http\Request;
use Laminas\Http\Client;

if (function_exists('newrelic_name_transaction')) {
    newrelic_name_transaction('LaminasPoC');

}

$request = new Request();
$request->setMethod(Request::METHOD_GET);
$request->setUri('https://newrelic.com');
$request->getHeaders()->addHeaders([
    'User-agent' => 'LaminasPoC',
]);

$client = new Client();
$response = $client->send($request);

// echo "Status: " . $response->getStatusCode() . "\n";
