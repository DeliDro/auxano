<?php
if (isset($_GET["id"]) && isset($_GET["on"])) {
    $on = $_GET["on"];
    $id = (int) $_GET["id"];

    $getfile = file_get_contents('data/'. $on .'.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile[$on];

    $toEdit = -1;
    for ($i = 0; $i < count($jsonfile); $i++) { 
        if ($jsonfile[$i]["id"] == $id) {
            $toEdit = $i;
        }
    }
    
    switch ($on) {
        case 'publications':
            # code...
            $post["id"] = $id;
            $post["titre"] = isset($_POST["edit-titre"]) ? $_POST["edit-titre"] : "";
            $post["tags"] = isset($_POST["edit-tags"]) ? $_POST["edit-tags"] : "";
            $post["date"] = isset($_POST["edit-date"]) ? $_POST["edit-date"] : "";
            $post["image"] = isset($_POST["edit-image"]) ? $_POST["edit-image"] : "";
            $post["contenu"] = isset($_POST["edit-contenu"]) ? $_POST["edit-contenu"] : "";
            break;
            
        case 'produits':
            # code...
            $post["id"] = $id;
            $post["nom"] = isset($_POST["edit-nom"]) ? $_POST["edit-nom"] : "";
            $post["image"] = isset($_POST["edit-image"]) ? $_POST["edit-image"] : "";
            $post["prix"] = isset($_POST["edit-prix"]) ? $_POST["edit-prix"] : "";
            $post["reduction"] = isset($_POST["edit-reduction"]) ? $_POST["edit-reduction"] : "";
            $post["description"] = isset($_POST["edit-description"]) ? $_POST["edit-description"] : "";
            break;
        
        case 'commandes':
            # code...
            break;
        
        default:
            # code...
            break;
    }

    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }

    console_log($toEdit);
    
    if ($toEdit !== -1) {
        $all = json_decode($getfile, true);
        unset($all[$on][$toEdit]);
        $all[$on][$toEdit] = $post;
        $all[$on] = array_values($all[$on]);
        file_put_contents("data/". $on .".json", json_encode($all, JSON_PRETTY_PRINT));
    }
    
    header("Location: ../". $on .".php");
}
?>