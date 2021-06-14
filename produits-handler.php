<script>
    const basket = {};
    var facture = 0;

    function goToCheckout() {
        sessionStorage.setItem("commande", JSON.stringify(basket));
        window.location.href = "/ma-commande.php";
    }

    function addToBasket(id) {
        basket[id] = basket[id] ? basket[id] + 1 : 1;
    }

    function filterCategorie(categorie) {
        const categories = <?php echo json_encode($categories, JSON_HEX_TAG); ?>;

        Object.keys(categories).forEach(i => {
            document.getElementsByName(i).forEach(element => {
                element.style.display = i === categorie ? "block" : "none";
            });
        });
    }

</script>
