<?php session_start() ?>

<?php $_SESSION["commande"] = json_decode($_GET["data"]);?>

<script>window.location.href = "ma-commande.php"</script>