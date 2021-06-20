<?php session_start() ?>
<?php
    $produits = json_decode(
        file_get_contents("admin/data-handler/data/produits.json"),
        JSON_HEX_TAG
    );
    ?>
<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        <?php include("components/header.php") ?>

        <?php include("components/title.php") ?>
        <script>setPageTitle("Produits")</script>

        <!--site-main start-->
        <div class="site-main">
            <!-- sidebar -->
            <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row d-block">
                        <div class="col-lg-9 content-area pull-left">
                            <!-- <p class="products-result-count">Affichage de 1–5 sur 5 résultats</p>
                            Tri 
                            <form class="products-ordering">
                                <div class="orderby">
                                    <select name="orderby" class="select2-hidden-accessible">
                                        <option value="menu_order" selected="selected">Normal</option>
                                        <option value="cheaper">Moins cher au plus cher</option>
                                        <option value="expensive">Plus cher au moins cher</option>
                                        <option value="date">Plus récent</option>
                                        <option value="price">Plus ancien</option>
                                    </select>
                                </div>
                            </form>-->;
                            
                            <!-- Produits -->
                            <input
                                type="button"
                                id="passerCommande"
                                onclick="goToCheckout()"
                                value="Passer ma commande"
                                style="border-radius:.5rem; background-color:#0DB2D6; font-weight:bold; padding: 8px 20px 8px; margin: 20px; margin-top:0px"
                            >
                            <div id="liste-produits" class="products row">
                                <?php
                                    $produits = $produits["produits"];
                                    $output = "";
                                    
                                    for ($i=0; $i < count($produits); $i++) { 
                                        # code...
                                        $item = $produits[$i];
                                        $output = $output .'<div class="product col-lg-4 col-md-6 col-xs-12" name='. $item["categorie"] .'><div class="ttm-product-box">
                                                <div class="ttm-product-box-inner" style="cursor:pointer">
                                                    <div class="ttm-shop-icon">
                                                        <div class="product-btn add-to-cart-btn" onclick="addToBasket('. ((int) $item["id"]) .')">Ajouter au panier</div>
                                                    </div>
                                                    <div class="ttm-product-image-box">
                                                        <img class="img-fluid" src="'. $item["image"] .'">
                                                    </div>
                                                </div>
                                                
                                                <div class="ttm-product-content">
                                                    <a class="ttm-product-title" href="">
                                                        <h2>'. $item["nom"] .'</h2> <br>
                                                    </a>
                                                    <span class="price"><span class="product-Price-amount">
                                                        <span class="product-Price-currencySymbol"></span>'. $item["prix"] .'</span> F CFA
                                                    </span>
                                                </div>
                                            </div></div>';
                                    }
                                    echo $output;
                                ?>
                                
                            </div>
                            
                            <!-- Page de résultats -->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="ttm-pagination">
                                        <span class="page-numbers current">1</span>
                                        <a class="page-numbers" href="#">2</a>
                                        <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">
                            <aside class="widget widget-search">
                                <form role="search" class="search-form box-shadow">
                                    <label>
                                    <span class="screen-reader-text">Chercher :</span>
                                    <i class="fa fa-search"></i>
                                    <input type="search" class="input-text" placeholder="Chercher un produit ..." value="" name="s">
                                    </label>
                                </form>
                            </aside>
                            
                            <aside class="widget widget-categories">
                                <h3 class="widget-title">Catégories</h3>
                                <ul>
                                    <?php
                                        $categories = array();

                                        for ($i=0; $i < count($produits); $i++) {
                                            $categorie = $produits[$i]["categorie"];
                                            
                                            if (isset($categories[$categorie])) {
                                                $categories[$categorie] += 1;
                                            }
                                            
                                            else {
                                                $categories[$categorie] = 1;
                                            }                                            
                                        }

                                        $output = "";
                                        $keys = array_keys($categories);
                                        for ($i = 0; $i < count($categories); $i++) {                                         
                                            $output = $output
                                                . '<li style="cursor:pointer;" onclick="filterCategorie(\''. $keys[$i] .'\')">'
                                                . $keys[$i]
                                                . "&nbsp;&nbsp;("
                                                . $categories[$keys[$i]]
                                                . ')</li>';
                                        }
                                        
                                        echo $output;
                                    ?>
                                    <?php include("produits-handler.php") ?>
                                </ul>
                            </aside>
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->

            
        </div>

        <?php include("components/footer.php") ?>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min.js?ver=4.9.3"></script>
    <script src="js/main.js"></script>
    <script src="js/chart.js"></script>
</body>
</html>