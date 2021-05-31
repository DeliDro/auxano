<?php session_start() ?>
<?php
    $publications = json_decode(
        file_get_contents("admin/data-handler/data/publications.json"),
        JSON_HEX_TAG
    );
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="Auxano Group" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Auxano Group</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page">

        <?php include("components/header.php") ?>

        <!--site-main start-->
        <div class="site-main">
            <?php
                function getTags($tags) {
                    $tags = explode(",", $tags);
                    
                    for ($i=0; $i < count($tags) ; $i++) { 
                        # code...
                        $tags[$i] = "<a>". $tags[$i]. "</a>";
                    };
                    return implode("", $tags);
                }

                $publications = $publications["publications"];
                $output = "";
                
                for ($i=0; $i < count($publications); $i++) { 
                    # code...
                    $item = $publications[$i];
                    $output = '
                    <section class="ttm-row blog-left-img-section clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                    <div class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                                        <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                                            <div class="featured-thumbnail"> 
                                                <img class="img-fluid" src="'. $item["image"] .'" alt="image"> 
                                            </div> 
                                        </div>
                                        <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                                            <span class="category">
                                                '. getTags($item["tags"]) .'
                                            </span>
                                            <div class="post-title featured-title">
                                                <h5><a href="publication.php?id='. $item["id"] .'">'. $item["titre"] .'</a></h5>
                                            </div>
                                            <div class="featured-desc ttm-box-desc">
                                                <p>'. substr($item["contenu"], 0, 100) .'...</p>
                                            </div>
                                            <div class="post-meta">
                                                <span class="ttm-meta-line"><i class="fa fa-calendar"></i>'. $item["date"] .'</a></span>
                                                <span class="ttm-meta-line"><i class="fa fa-eye"></i>0 vues</span>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox-post end-->
                                </div>
                            </div>
                        </div>
                    </section>';
                }
                echo $output;
            ?>

        </div><!--site-main end-->

        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <!-- Logo / Adresse / Contact / Email -->
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="first-footer-inner">

                                <!-- Logo Auxano -->
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="images/footer-logo.png" alt="">
                                </div>
                                
                                <!-- Adresse  / Contact / Email -->
                                <div class="row no-gutters footer-box">
                                    <!-- Adresse -->
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title" >
                                                    <h5 style="color: #fff">Notre adresse</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p> Adresse, Quartier, Ville, Pays</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Contact -->
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5 style="color: #fff">Notre contact</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>+212 00 000 000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Email -->
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5 style="color: #fff">Notre email</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>info@auxano.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- A propos / Liens utiles / Dernier Article / Représentatios -->
            <div class="second-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title">A propos de notre entreprise</h3>
                                <div class="textwidget widget-text">
                                    [Texte de présentation]
                                    <br><br>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="mb-20">
                                        <a target="_blank" class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor ttm-btn-color-white" href="nous-contacter.php">
                                            Voir plus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Liens utiles</h3>
                                <ul id="menu-footer-services">
                                    <li><a href="#">Produits</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Qui sommes-nous ?</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                    <li><a href="#">Notre équipe</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text clearfix">
                                <h3 class="widget-title">Derniers articles</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <li>
                                        <a href="publication.php"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <span class="post-date">07 Mai 2021</span>
                                        <a href="publication.php">Article 1</a>
                                    </li>
                                    
                                    <li>
                                        <a href="publication.php"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <span class="post-date">07 Mai 2021</span>
                                        <a href="publication.php">Article 2</a>
                                    </li>
                                    
                                    <li>
                                        <a href="publication.php"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <span class="post-date">07 Mai 2021</span>
                                        <a href="publication.php">Article 3</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                            <div class="widget flicker_widget clearfix">
                            <h3 class="widget-title">Nos représentations</h3>
                            <div class="textwidget widget-text">
                                    <ul class="ttm-our-location-list">
                                        <li><i class="fa fa-map-marker"></i>Maroc : +212 00 000 000</li>
                                        <li><i class="fa fa-map-marker"></i>France : +33 00 000 000</li>
                                        <li><i class="fa fa-map-marker"></i>Côte d'Ivoire : +225 00 000 000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <ul id="menu-footer-menu" class="footer-nav-menu">
                                <li><a target="_blank" href="">Qui sommes-nous ?</a></li>
                                <li><a target="_blank" href="publications.php">Produits</a></li>
                                <li><a target="_blank" href="services-auxano.php">Services</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="">
                                <span>Copyright © 2021&nbsp;<a href="#">Auxano Group</a>. Tous droits réservés.</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

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