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
                                            <p>61 AV LALLA YACOUT ANGLE MAANI <br> ETG 2, Casablanca</p>
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
                                            <p>+212 693 667 494</p>
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
                                            <p onclick="mailto:Auxanogroup.ca@gmail.com">auxanogroup.ca@gmail.com</p>
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
    
    <!-- A propos / Liens utiles / Dernier Article / Repr??sentatios -->
    <div class="second-footer ttm-textcolor-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text  clearfix">
                        <h3 class="widget-title">A propos de notre entreprise</h3>
                        <div class="textwidget widget-text">
                            [Texte de pr??sentation]
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
                                <a target="_blank" class="ttm-btn ttm-btn-size-xs ttm-btn-shape-square ttm-btn-style-fill ttm-btn-bgcolor-skincolor ttm-btn-color-white" href="#">
                                    Voir plus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- LINENS UTILIES -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="widget-title">Liens utiles</h3>
                        <ul id="menu-footer-services">
                            <li><a href="produits.php">Produits</a></li>
                            <li><a href="services-auxano.php">Services</a></li>
                            <li><a href="aboutus-1.php">Qui sommes-nous ?</a></li>
                            <li><a href="nous-contacter.php">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- DERNIERS ARTICLES   -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget widget_text clearfix">
                        <h3 class="widget-title">Derniers articles</h3>
                        <ul id="last-articles" class="widget-post ttm-recent-post-list">
                            <script>
                                const lastArts = JSON
                                    .parse(<?php 
                                        echo json_encode(file_get_contents("admin/data-handler/data/publications.json"), JSON_HEX_TAG);
                                    ?>)
                                    .publications
                                    .slice(0, 3);
                                
                                document.getElementById("last-articles").innerHTML = lastArts.map(pub => `
                                    <li>
                                        <img src="${pub.image}" alt="image">
                                        <span class="post-date">${pub.date}</span>
                                        <a href="publication.php?id=${pub.id}">${pub.titre}</a>
                                    </li>
                                `).join("");
                            </script>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                    <div class="widget flicker_widget clearfix">
                        <h3 class="widget-title">Nos repr??sentations</h3>
                        <div class="textwidget widget-text">
                            <ul class="ttm-our-location-list">
                                <li><i class="fa fa-map-marker"></i>Casablanca, Maroc : +212 693 667 494</li>
                                <li><i class="fa fa-map-marker"></i>Abidjan, C??te d'Ivoire : +225 07 00 000 000 </li>
                                <li><i class="fa fa-map-marker"></i>Dakar, S??n??gal : +221 00 000 000</li>
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
                        <li><a href="aboutus-1.php">Qui sommes-nous ?</a></li>
                        <li><a href="produits.php">Produits</a></li>
                        <li><a href="services-auxano.php">Services</a></li>
                    </ul>
                </div>
                
                <div class="col-md-12">
                    <div class="">
                        <span>Copyright ?? 2021&nbsp;<a href="#">Auxano Group</a>. Tous droits r??serv??s.</span>
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