<?php

$current_dir = dirname( __FILE__ );
$resources_dir = $current_dir . "/res";
$html_dir = $resources_dir . "/html";

if (empty($_GET)){
    require_once($html_dir . '/weather_stats.html');
}
else{
    $wc = $_GET['wc'];
    $weather_params = array("temperature", "pressure", "humidity");
    $files = array();
    $values = array();
    foreach($weather_params as $weather_param){
        $file_path = $resources_dir . '/WC' . $wc . '/' . $weather_param . '.txt';
        if (!file_exists($file_path)) throw new UnexpectedValueException('WC cannot be ' . $wc);
        $values[$weather_param] = array();
        $values[$weather_param]['columns']['date'] = 'string';
        $values[$weather_param]['columns']['value'] = 'number';
        $values[$weather_param]['options']['title'] = strtoupper($weather_param);
        $values[$weather_param]['options']['width'] = 600;
        $values[$weather_param]['options']['height'] = 400;
        $files[$weather_param] = fopen($file_path, 'r');
        // Read file content
        while ($nextline = fgets($files[$weather_param])){
            $trim_nextline = trim($nextline);
            if (empty($nextline) || empty($trim_nextline)) continue;
            // Line format: HH:mm:ss DATA
            $nextline = explode(' ', $nextline);
            $values[$weather_param]['rows'][$nextline[0]] = ((float) $nextline[1])/1000;
        }
        fclose($files[$weather_param]);
    }
    echo json_encode($values);
}