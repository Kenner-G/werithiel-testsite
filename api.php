<?php
    $para = $_SERVER['QUERY_STRING'];
    $resonse = file_get_contents("http://search.roblox.com/catalog/json?%22.$para); 
    echo $resonse;
?>
