<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}


if (isset($_GET["id"])) {
    $on = $_GET["on"];
    $id = (int) $_GET["id"];

    $data = file_get_contents('data/'. $on .'.json');
    $data = json_decode($data, true);
    $jsonfile = $data[$on];
    
    $toDelete = -1;
    for ($i = 0; $i < count($jsonfile); $i++) { 
        if ($jsonfile[$i]["id"] == $id) {
            $toDelete = $i;
        }
    }

    if ($toDelete != -1) {
        unset($data[$on][$toDelete]);
        $data[$on] = array_values($data[$on]);
        file_put_contents("data/". $on .".json", json_encode($data, JSON_PRETTY_PRINT));
    }
    
    header("Location: ../". $on .".php");
}

?>