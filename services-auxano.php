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
          <section class="element-row element-style clearfix mt_40">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-12">
                          <div class="ttm-tabs ttm-tab-style-vertical row">
                              <div class="col-lg-4 col-md-4">
                                  <!-- tabs -->
                                  <ul class="tabs">
                                      <li class="tab active"><a href="#">Section 1</a></li>
                                      <li class="tab"><a href="#">Section 2</a></li>
                                      <li class="tab"><a href="#">Section 3</a></li>
                                      <li class="tab"><a href="#">Section 4</a></li>
                                  </ul>
                              </div>
                              <div class="content-tab col-lg-8 col-md-8 res-991-plr-15">
                                  <div class="content-inner">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Ut enim ad minim veniam, quis nostrud.</p>
                                  </div>
                                  <div class="content-inner">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Ut enim ad minim veniam, quis nostrud.</p>
                                  </div>
                                  <div class="content-inner">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Ut enim ad minim veniam, quis nostrud.</p>
                                  </div>
                                  <div class="content-inner">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Ut enim ad minim veniam, quis nostrud.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </diV>
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