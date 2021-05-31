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

        <?php include("components/footer.php") ?>

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