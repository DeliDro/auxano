<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page">

        <?php include("components/header.php") ?>

        <!-- ERREUR 404 -->
        <section class="error-404 ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ttm-big-icon ttm-textcolor-skincolor">
                            <i class="fa fa-thumbs-o-down"></i>
                        </div>
                        <header class="page-header"><h1 class="page-title" style="color: #0DB1D7">Erreur 404</h1></header>
                        <div class="page-content"> <p style="color: #0DB1D7">La page que vous recherchez n'existe pas ou a été supprimée</p></div>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mb-15" href="index.php" style="color: #0DB1D7; border-color: #0DB1D7">
                            Revenir à l'Accueil
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
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