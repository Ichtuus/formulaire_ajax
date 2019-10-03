<?php
$srcJson = realpath(dirname(__FILE__) . "/datas.json");
$parseJ = file_get_contents($srcJson);
$datasJson = json_decode($parseJ, true);
//
// echo '<pre>';
// print_r($datasJson);
