<?php
header("Content-Type: application/json; charset=utf-8");
$from = time(); //strtotime("-3 hour");
echo file_get_contents('https://api.nicehash.com/api?method=stats.provider.ex&addr=14gNTdUiwJyReMrV4xtY2Sq7cQYLe9ftq3&from='.$from);