<script>
    function activePage(page) {
        var classActive = "flex items-center text-white py-4 pl-6 nav-item active-nav-link";
        document.getElementById(page).class = classActive;
    }
</script>

<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6 text-white text-3xl font-semibold uppercase cursor-default">
        Auxano Group
    </div>
    
    <nav class="text-white text-base font-semibold pt-3">
        <a href="produits.php" id="aside-produits" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-shopping-cart mr-3"></i>
            Produits
        </a>
        
        <a href="commandes.php" id="aside-commandes" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-hourglass-half mr-3"></i>
            Commandes
        </a>
        
        <a href="publications.php" id="aside-publications" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-book mr-3"></i>
            Publications
        </a>
    </nav>
</aside>