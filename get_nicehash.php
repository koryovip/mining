<?php
header("Content-Type: application/json; charset=utf-8");
echo file_get_contents('https://api.nicehash.com/api?method=stats.provider.workers&addr=14gNTdUiwJyReMrV4xtY2Sq7cQYLe9ftq3');