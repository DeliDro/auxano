<?php
    // PUBLICATIONS
    function getPublication() {
        $publication = array_filter(getPublications(), "isPublication");
        return $publication ? $publication[0] : NULL; 
    }

    function getPublications() {
        return json_decode(file_get_contents("admin/data-handler/data/publications.json"), JSON_HEX_TAG)["publications"];
    }

    function isPublication($publication) {  
        $id = (int) $_GET["id"];
        return $publication["id"] === $id;
    }

    // PRODUITS
    function isProduit($produit) {
        $id = (int) $_GET["id"];
        return $produit["id"] === $id;
    }

    function getProduit($id) {
        if (!$id) {
            $produit = array_filter(getProduits(), "isProduit");
        }

        else {
            $produit = getProduitFromId($id);
        }

        if ($produit) {
            return $produit[0];
        }

        return;
    }

    function getProduitFromId($id) {
        return NULL;
    }

    function getProduits() {
        return json_decode(file_get_contents("admin/data-handler/data/produits.json"), JSON_HEX_TAG)["produits"];
    }

    // OTHERS
    function toJS($data) {
        echo json_encode($data, JSON_HEX_TAG);
    }
?>