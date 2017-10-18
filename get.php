<?php
header("Content-Type: application/json; charset=utf-8");
$sia_address = '33b541bed6cdbea524d2f3db4b3d40ce5f203c5548a8c289748e3b60433755025fdfe07229af';
$siamining_url = "https://siamining.com/api/v1/addresses/$sia_address";
echo file_get_contents($siamining_url);

$eth_address = '0ac781ab4dbc80f8a03d313665b9778938c9e267';