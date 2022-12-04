<?php
require_once "vendor/autoload.php";
$years = ['2022'];
$days = ['1','2','3','4'];

foreach($years as $year) {
    foreach ($days as $day) {
        $c = curl_init("https://adventofcode.com/$year/day/$day");
        curl_setopt($c, CURLOPT_VERBOSE, 1);
        curl_setopt($c, CURLOPT_COOKIE, 'session=53616c7465645f5fad69e4b9df4a4d54959ee434c921c9bcd00c9ba20e8c2eb9fcf832a88e04d6c98c9e4bae45b62f39fb32be51343e1af7b31470a7d63f04a2');
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $page = curl_exec($c);
        curl_close($c);

        file_put_contents("HTML/$year"."Day".$day.".html", $page);
    }
}