<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page">

        <?php include("components/header.php") ?>

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">Nous contacter</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.php"><i class="ti ti-home"></i>&nbsp;&nbsp;Accueil</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                <span style="font-weight: bold; color: white">Nous contacter</span>
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">
            <!-- contact-form-section -->
            <section class="ttm-row contact-form-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="spacing-6 clearfix">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h3 class="title">
                                            Notre équipe se met à votre disposition
                                        </h3>
                                    </div>
                                </div><!-- section title end -->
                                <ul class="ttm_contact_widget_wrapper">
                                    <li>
                                        <h6>Notre adresse</h6>
                                        <i class="ttm-textcolor-skincolor ti ti-location-pin"></i>
                                        <span>Adresse, Quartier, Ville, Pays</span>
                                    </li>
                                    <li>
                                        <h6>Nore e-mail</h6>
                                        <i class="ttm-textcolor-skincolor ti ti-comment"></i>
                                        <span><a href="mailto:auxanogroup.ca@gmail.com">auxanogroup.ca@gmail.com</a></span>
                                    </li>
                                    <li>
                                        <h6>Notre numéro</h6>
                                        <i class="ttm-textcolor-skincolor ti ti-mobile"></i>
                                        <span>+212 00 000 000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6" style="display: block;">
                            <div class="map-col-bg ttm-bgcolor-skincolor spacing-7">
                                <!-- section title -->
                                <div class="section-title text-left with-desc clearfix">
                                    <div class="title-header">
                                        <h2 class="title">Nous vous <br> écoutons </h2>
                                    </div>
                                </div><!-- section title end -->
                                <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input">
                                                    <input name="your-name" type="text" value="" placeholder="Votre nom" required="required">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input">
                                                    <input name="email" type="email" value="" placeholder="Votre Email" required="required">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input">
                                                    <input name="your-phone" type="text" value="" placeholder="Votre numéro" required="required">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                <span class="text-input">
                                                    <input name="venue" type="text" value="" placeholder="Sujet" required="required">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <label>
                                        <span class="text-input">
                                            <textarea name="message" cols="40" rows="3" placeholder="Message" required="required"></textarea>
                                        </span>
                                    </label>
                                    <input
                                        name="submit" type="button" id="submit"
                                        class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-darkgrey"
                                        value="Envoyer">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-form-section END-->
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

    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script>

        function initialize() {
            var latlng = new google.maps.LatLng(-34.397, 150.644);
            var myOptions = {
                zoom: 8,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                    myOptions);
        }
        google.maps.event.addDomListener(window, "load", initialize);

    </script>

</body>
</html>
