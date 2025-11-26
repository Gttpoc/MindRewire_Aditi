<?php

$ip = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '127.0.0.1';
if ($ip == '127.0.0.1') {
    $ip = '115.242.226.1'; //dummy ip for testing
}

if (!defined('LOCATION_API_KEY')) define('LOCATION_API_KEY', 'OiFzuY4Bv0Tr7As');

$url = "https://pro.ip-api.com/json/" . $ip . '?fields=continent,continentCode,status,message,country,countryCode,region,regionName,city,zip,currency,timezone&key=OiFzuY4Bv0Tr7As';

$loc = @file_get_contents($url);
$data = json_decode($loc, true);


if (!$data) {
    if (!defined('COUNTRY_CODE')) define('COUNTRY_CODE', 'IN');
    if (!defined('REGION_CODE')) define('REGION_CODE', 'KA');
    if (!defined('COUNTRY_CURRENCY')) define('COUNTRY_CURRENCY', 'INR');

    if (!defined('ALL_DATA_LOC')) define('ALL_DATA_LOC', [
        "city" => "Kozhikode",
        "continent" => "Asia",
        "continentCode" => "AS",
        "country" => "India",
        "countryCode" => "IN",
        "currency" => "INR",
        "region" => "KL",
        "regionName" => "Kerala",
        "status" => "success",
        "timezone" => "Asia/Kolkata",
        "zip" => "673004",
    ]);
} else {
    if (!defined('COUNTRY_CODE')) define('COUNTRY_CODE', $data['countryCode']);
    if (!defined('REGION_CODE')) define('REGION_CODE', $data['region']);
    if (!defined('COUNTRY_CURRENCY')) define('COUNTRY_CURRENCY', $data['currency']);
    if (!defined('ALL_DATA_LOC')) define('ALL_DATA_LOC', $data);
}
