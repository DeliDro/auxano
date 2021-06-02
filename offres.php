<?php session_start() ?>

<script>const offres = JSON
    .parse(<?php echo json_encode(file_get_contents("admin/data-handler/data/offres.json"), JSON_HEX_TAG) ?>)
    .offres;
</script>

<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>
    <?php include("components/header.php") ?>

    <div class="site-main">

        <?php include("components/title.php") ?>
        <script>setPageTitle("Offres")</script>
    
        <section class="ttm-row carrer-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    
                    <!-- INTITULE -->
                    <div class="col-md-8 col-sm-10">
                        <div class="section-title text-center with-desc mb-40 clearfix">
                            <div class="title-header mb-60">
                                <h2 class="title">Offres disponibles</h2>
                            </div>
                            <div class="title-desc">
                                Découvrez toutes les offres d'emploi disponibles chez Auxano Group. <br>
                                Saisissez votre chance d'intégrer une équipe dynamique et relevez des challenges passionnants.
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                
                <!-- OFFRES / POURQUOI TRAVAILLER AVEC NOUS -->
                <div class="row">
                    <div class="col-lg-9">
                        <h4>Nous recrutons :</h4>
                        
                        <!-- LISTE DES OFFRES -->
                        <div class="accordion style2 res-991-mt-30" id="offres-content">
                            <script>
                                var output = offres
                                    .map(offre =>
                                        `<div class="toggle ttm-style-classic ttm-toggle-title-border">
                                            <div class="toggle-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >${offre.intitule} (${offre.places < 10 ? "0" + offre.places : offre.places} place${offre.places > 1 ? "s" : ""})</a>
                                            </div>
                                            <div class="toggle-content">
                                                <h6>Description du poste</h6>
                                                
                                                ${offre.description.split("\n").map(i => `<p>${i}</p>`).join(" ")}
                                                
                                                <h6 class="pt-15">Prérequis</h6>
                                                
                                                <ul class="ttm-list ttm-list-style-icon mt-15 mb-20">
                                                    ${offre.prerequis
                                                        .split("\n").map(i => 
                                                            `<li><i class="ttm-textcolor-skincolor fa fa-angle-right"></i><span class="ttm-list-li-content">
                                                                ${i}
                                                            </span></li>`)
                                                        .join(" ")
                                                    }
                                                </ul>
                                                <span>Veuillez envoyer votre CV à <a href="mailto:auxanogroup.ca@gmail.com">auxanogroup.ca@gmail.com</a> </span>
                                            </div>
                                        </div>`
                                    )
                                    .join("");
                                document.getElementById("offres-content").innerHTML = output;
                            </script>
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="res-991-mt-30">
                            <h4>Être chez nous?</h4>
                            <div class="row">
                                
                                <!-- RAISON 1 -->
                                <div class="col-md-4 col-lg-12">
                                    <div class="featured-icon-box style8 text-center">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                <i class="flaticon flaticon-consult"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Raison 1</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Description raison 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- RAISON 1 -->
                                <div class="col-md-4 col-lg-12">
                                    <div class="featured-icon-box style8 text-center">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                <i class="flaticon flaticon-consult"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Raison 1</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Description raison 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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