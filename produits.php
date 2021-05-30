<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        <?php include("components/header.php") ?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title"> Produits</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span style="color: #103d6a"> Produits </span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">
            <!-- sidebar -->
            <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row d-block">
                        <div class="col-lg-9 content-area pull-left">
                            <p class="products-result-count">Affichage de 1–5 sur 5 résultats</p>
                            <!-- Tri -->
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
                            </form>
                            
                            <!-- Produits -->
                            <div class="products row">
                                <!-- product -->
                                <div class="product col-lg-4 col-md-6 col-xs-12">
                                    <div class="ttm-product-box">
                                        <!-- ttm-product-box-inner -->
                                        <div class="ttm-product-box-inner">
                                            <div class="ttm-shop-icon">
                                                <div class="product-btn add-to-cart-btn"><a href="#">Ajouter au panier</a></div>
                                            </div>
                                            <div class="ttm-product-image-box">
                                                <img class="img-fluid" src="https://via.placeholder.com/600X697/444444.jpg" alt="">
                                            </div>
                                        </div><!-- ttm-product-box-inner end -->
                                        <div class="ttm-product-content">
                                            <a class="ttm-product-title" href="">
                                                <h2>Produit</h2> <br>
                                            </a>
                                            <span class="price"><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol"></span>10 000</span> F CFA
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product end -->

                                <!-- product -->
                                <div class="product col-lg-4 col-md-6 col-xs-12">
                                    <div class="ttm-product-box">
                                        <!-- ttm-product-box-inner -->
                                        <div class="ttm-product-box-inner">
                                            <div class="ttm-shop-icon">
                                                <div class="product-btn add-to-cart-btn"><a href="#">Ajouter au panier</a></div>
                                            </div>
                                            <div class="ttm-product-image-box">
                                                <img class="img-fluid" src="https://via.placeholder.com/600X697/444444.jpg" alt="">
                                            </div>
                                        </div><!-- ttm-product-box-inner end -->
                                        <div class="ttm-product-content">
                                            <a class="ttm-product-title" href="">
                                                <h2>Produit</h2> <br>
                                            </a>
                                            <span class="price"><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol"></span>10 000</span> F CFA
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product end -->

                                <!-- product -->
                                <div class="product col-lg-4 col-md-6 col-xs-12">
                                    <div class="ttm-product-box">
                                        <!-- ttm-product-box-inner -->
                                        <div class="ttm-product-box-inner">
                                            <div class="ttm-shop-icon">
                                                <div class="product-btn add-to-cart-btn"><a href="#">Ajouter au panier</a></div>
                                            </div>
                                            <div class="ttm-product-image-box">
                                                <img class="img-fluid" src="https://via.placeholder.com/600X697/444444.jpg" alt="">
                                            </div>
                                        </div><!-- ttm-product-box-inner end -->
                                        <div class="ttm-product-content">
                                            <a class="ttm-product-title" href="">
                                                <h2>Produit</h2> <br>
                                            </a>
                                            <span class="price"><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol"></span>10 000</span> F CFA
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product end -->

                                <!-- product -->
                                <div class="product col-lg-4 col-md-6 col-xs-12">
                                    <div class="ttm-product-box">
                                        <!-- ttm-product-box-inner -->
                                        <div class="ttm-product-box-inner">
                                            <div class="ttm-shop-icon">
                                                <div class="product-btn add-to-cart-btn"><a href="#">Ajouter au panier</a></div>
                                            </div>
                                            <div class="ttm-product-image-box">
                                                <img class="img-fluid" src="https://via.placeholder.com/600X697/444444.jpg" alt="">
                                            </div>
                                        </div><!-- ttm-product-box-inner end -->
                                        <div class="ttm-product-content">
                                            <a class="ttm-product-title" href="">
                                                <h2>Produit</h2> <br>
                                            </a>
                                            <span class="price"><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol"></span>10 000</span> F CFA
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product end -->

                                <!-- product -->
                                <div class="product col-lg-4 col-md-6 col-xs-12">
                                    <div class="ttm-product-box">
                                        <!-- ttm-product-box-inner -->
                                        <div class="ttm-product-box-inner">
                                            <div class="ttm-shop-icon">
                                                <div class="product-btn add-to-cart-btn"><a href="#">Ajouter au panier</a></div>
                                            </div>
                                            <div class="ttm-product-image-box">
                                                <img class="img-fluid" src="https://via.placeholder.com/600X697/444444.jpg" alt="">
                                            </div>
                                        </div><!-- ttm-product-box-inner end -->
                                        <div class="ttm-product-content">
                                            <a class="ttm-product-title" href="">
                                                <h2>Produit</h2> <br>
                                            </a>
                                            <span class="price"><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol"></span>10 000</span> F CFA
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product end -->
                                
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
                                    <li><a href="#">Catégorie 1</a></li>
                                    <li><a href="#">Catégorie 2</a></li>
                                    <li><a href="#">Catégorie 3</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
            <!-- sidebar end -->

            
        </div><!--site-main end-->

        <?php include("components/footer.php") ?>

    </div><!-- page end -->


    <!-- Javascript -->

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

    <!-- Javascript end-->

</body>
</html>