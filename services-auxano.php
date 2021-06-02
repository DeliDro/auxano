<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        <?php include("components/header.php") ?>

        <?php include("components/title.php") ?>
        <script>setPageTitle("Services")</script>

        <!--site-main start-->
        <div class="site-main">
            <!-- sidebar -->
            <div class="sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row d-block">
                        <div class="col-lg-3 widget-area ttm-bgcolor-grey">
                            <aside class="widget widget-nav-menu">
                                <ul class="widget-menu">
                                    <li><a href="produits.php">Produits</a></li>
                                    <li class="active"><a href="services-auxano.php">Services</a></li>
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

    <script>
        var researchCanvas = document.getElementById("researchChart");

        Chart.defaults.global.defaultFontFamily = "Poppins";
        Chart.defaults.global.defaultFontSize = 14;
        Chart.defaults.global.defaultFontStyle = "italic";

        var dataFirst = {
            label: "research-1",
            data: [0, 8, 15, 20, 18, 15, 10],
            lineTension: 0,
            fill: false,
            borderColor: 'rgba(247, 23, 53,1)'
          };

        var dataSecond = {
            label: "research-2",
            data: [25, 15, 5, 3, 5, 20, 35],
            lineTension: 0,
            fill: false,
            borderColor: 'rgba(93, 75, 176,1)'
          };

        var researchData = {
          labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUNE", "JULY"],
          datasets: [dataFirst, dataSecond]
        };

        var chartOptions = {
          legend: {
            display: true,
            position: 'bottom',
            labels: {
              boxWidth: 20,
              fontColor: 'black'
            }
          }
        };

        var lineChart = new Chart(researchCanvas, {
          type: 'line',
          data: researchData,
          options: chartOptions
        });
   </script> 
</body>
</html>