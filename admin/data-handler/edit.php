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
            $post["auteur"] = isset($_POST["edit-auteur"]) ? $_POST["edit-auteur"] : "";
            $post["description-auteur"] = isset($_POST["edit-description-auteur"]) ? $_POST["edit-description-auteur"] : "";
            $post["tags"] = isset($_POST["edit-tags"]) ? $_POST["edit-tags"] : "";
            $post["date"] = isset($_POST["edit-date"]) ? $_POST["edit-date"] : "";
            $post["contenu"] = isset($_POST["edit-contenu"]) ? $_POST["edit-contenu"] : "";
            break;
            
        case 'produits':
            # code...
            $post["id"] = $id;
            $post["nom"] = isset($_POST["edit-nom"]) ? $_POST["edit-nom"] : "";
            $post["image"] = isset($_POST["edit-image"]) ? $_POST["edit-image"] : "";
            $post["categorie"] = isset($_POST["edit-new-categorie"]) ? $_POST["edit-new-categorie"] : $_POST["edit-select-categorie"];
            $post["prix"] = isset($_POST["edit-prix"]) ? $_POST["edit-prix"] : "";
            $post["reduction"] = isset($_POST["edit-reduction"]) ? $_POST["edit-reduction"] : "";
            $post["description"] = isset($_POST["edit-description"]) ? $_POST["edit-description"] : "";
            break;
        
        case 'commandes':
            # code...
            $post["id"] = $id;
            $post["client"] = isset($_POST["edit-client"]) ? $_POST["edit-client"] : "";
            $post["contact"] = isset($_POST["edit-contact"]) ? $_POST["edit-contact"] : "";
            $post["commandes"] = isset($_POST["edit-commandes"]) ? $_POST["edit-commandes"] : "";
            $post["facture"] = isset($_POST["edit-facture"]) ? $_POST["edit-facture"] : "";
            break;
        
        case "offres":
            # code...
            $post["id"] = $id;
            $post["intitule"] = isset($_POST["edit-intitule"]) ? $_POST["edit-intitule"] : "";
            $post["places"] = isset($_POST["edit-places"]) ? $_POST["edit-places"] : "";
            $post["salaire"] = isset($_POST["edit-salaire"]) ? $_POST["edit-salaire"] : "";
            $post["prerequis"] = isset($_POST["edit-prerequis"]) ? $_POST["edit-prerequis"] : "";
            $post["description"] = isset($_POST["edit-description"]) ? $_POST["edit-description"] : "";
        
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