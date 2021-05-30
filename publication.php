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
                                <h1 class="title">Titre publication</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span style="font-weight: bold; color: white"> Titre Publication </span>
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
                            <!-- ttm-blog-classic-->
                            <article class="post ttm-blog-classic">
                            <div class="featured-imagebox featured-imagebox-post">
                                <!-- Image de l'article -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="https://via.placeholder.com/1200X800/444444.jpg" alt="image de l'article">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-xs">
                                                <i class="ti ti-pencil"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  Date / Nombre de vue -->
                                    <div class="featured-content featured-content-post">
                                        <div class="post-meta">
                                            <span class="ttm-meta-line"><i class="fa fa-calendar"></i>19 Mai 2021</span>
                                            <span class="ttm-meta-line"><i class="fa fa-eye"></i>2 vues</span>
                                        </div>
                                        <div class="separator">
                                            <div class="sep-line solid mt-10 mb-20"></div>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction</p>
                                            <p>Introduction encore Introduction encore Introduction encore Introduction encore Introduction encore Introduction encore Introduction encore Introduction encore</p>
                                            <p>Introduction encore de encore Introduction encore de encore Introduction encore de encore Introduction encore de encore Introduction encore de encore Introduction encore de encore</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ttm-blog-classic-content single-blog">
                                    <div class="mb-30">
                                        <img src="https://via.placeholder.com/1200X800/444444.jpg" class="img-fluid" alt="blog-1">
                                    </div>
                                    <h4>Titre de section</h4>
                                        <p>Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section </p>
                                        <p>Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section Contenu de la section </p>
                                    <blockquote>
                                        <p class="mb-20">Citation Importante</p>
                                    </blockquote>
                                    <p>Du texte encore</p>
                                    
                                    <div class="separator">
                                        <div class="sep-line solid mt-30 mb-30"></div>
                                    </div>
                                </div>
                            </article>
                            <!-- ttm-blog-classic end -->
                        </div>

                        <!-- Tags / Auteur / Dernières publications -->
                        <div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">

                            <!-- Tags -->
                            <aside class="widget tagcloud-widget">
                                <h3 class="widget-title">Tags</h3>
                                <div class="tagcloud">
                                    <a class="tag-cloud-link">Tag 1</a>
                                    <a class="tag-cloud-link">Tag 2</a>
                                </div>
                            </aside>

                            <!-- Auteur -->
                            <aside class="widget widget-text">
                                <div class="ttm-author-widget">
                                    <div class="author-widget_img">
                                        <img class="author-img" src="https://via.placeholder.com/175X175/444444.png" alt="image auteur">
                                    </div>
                                    <h4 class="author-name">Auteur</h4>
                                    <p class="author-widget_text">Description de l'auteur</p>
                                </div>
                            </aside>
                            
                            <!-- Dernières publications -->
                            <aside class="widget post-widget">
                                <h3 class="widget-title">Dernières publications</h3>
                                <ul class="widget-post ttm-recent-post-list">
                                    <li>
                                        <a href="publication.php"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <span class="post-date">19 Mai 2021</span>
                                        <a href="publication.php" class="clearfix">Titre</a>
                                    </li>
                                    <li>
                                        <a href="publication.php"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <span class="post-date">19 Mai 2021</span>
                                        <a href="publication.php" class="clearfix">Titre/a>
                                    </li>
                                    <li>
                                        <a href="publication.php"><img src="https://via.placeholder.com/150X150/444444.jpg" alt="post-img"></a>
                                        <span class="post-date">19 Mai 2021</span>
                                        <a href="publication.php" class="clearfix">Titre</a>
                                    </li>
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