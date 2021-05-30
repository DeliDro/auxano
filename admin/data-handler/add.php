<?php
$on = $_GET["on"];

if (isset($_POST["add"])) {
    $file = file_get_contents('data/'. $on .'.json');
    $data = json_decode($file, true);
    $_POST["id"] = ++$data["maxId"];
    
    unset($_POST["add"]);
    
    $data[$on] = array_values($data[$on]);
    
    array_push($data[$on], $_POST);
    
    file_put_contents('data/'. $on .".json", json_encode($data, JSON_PRETTY_PRINT));

    header("Location: ../". $on .".php");
}
?>