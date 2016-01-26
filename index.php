<?php

$current_dir = dirname( __FILE__ );

if (empty($_GET)){
    require_once($current_dir . '/weather.php');
}
else{
    // Requesting graph params
    $new_values = "";
    return json_encode($new_values);
}