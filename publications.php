<?php session_start() ?>
<?php include("utils.php") ?>
<?php
    $publications = getPublications();
?>
<!DOCTYPE html>
<html lang="fr">
<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page">

        <?php include("components/header.php") ?>

        <?php include("components/title.php") ?>
        <script>setPageTitle("Publications")</script>

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
                $output = '<section class="ttm-row blog-left-img-section clearfix"><div class="container"><div class="row">';
                
                for ($i=0; $i < count($publications); $i++) { 
                    # code...
                    $item = $publications[$i];
                    $output =  $output . '
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
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>';
                }
                
                $output = $output . "</div></div></section>";
                
                echo $output;
            ?>

        </div>

        <?php include("components/footer.php") ?>

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

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