<script>
    const basket = [];
    var facture = 0;

    function goToCheckout() {
        window.location.href = "/precommande.php?data=" + JSON.stringify(basket);
    }

    function addToBasket(id) {
        produit = basket.find(i => i.id === id);
        produit ? produit.count += 1 : basket.push({id, count: 1});
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
