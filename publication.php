<?php session_start() ?>
<?php include("utils.php") ?>
<script>const publication = <?php echo toJS(getPublication()); ?></script>
<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page sidebar-true">

        <?php include("components/header.php") ?>

        <?php include("components/title.php") ?>
        <script>setPageTitle(publication.titre)</script>

        <!--site-main start-->
        <div class="site-main">
            <!-- sidebar -->
            <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
                <div class="container">
                    <div class="row d-block">
                        <!-- ARTICLE -->
                        <div class="col-lg-9 content-area pull-left">
                            <article id="article-content" class="post ttm-blog-classic">
                                <script>
                                    function formatRow(row) {
                                        if (row.includes("[titre]"))
                                            return `<h4>
                                                ${row.replace(/\[titre\]/, "")}
                                            </h4>`;
                                        
                                        if (row.includes("[citation]"))
                                            return `<blockquote>
                                                <p class="mb-20">${row.replace(/\[citation\]/, "")}</p>
                                            </blockquote>`;
                                        
                                        if (row.includes("[image]"))
                                            return `<div class="featured-thumbnail">
                                                <img class="img-fluid" src="${row.replace(/\[image\]/, "")}" alt="image">
                                            </div>`;
                                        
                                        return `<p>${row}</p>`;
                                    }

                                    let output = [
                                        '<div class="ttm-blog-classic-content single-blog">',
                                        ...publication.contenu.split("\r\n")
                                        ]
                                        .map(row => formatRow(row) );
                                    
                                    output.push('<div class="separator"><div class="sep-line solid mt-30 mb-30"></div></div></div>')
                                    output = output.join("");
                                    
                                    document.getElementById("article-content").innerHTML = output;
                                </script>
                            </article>
                        </div>

                        <!-- Tags / Auteur / Dernières publications -->
                        <div class="col-lg-3 widget-area ttm-bgcolor-grey pull-right">

                            <!-- Auteur -->
                            <aside class="widget widget-text">
                                <h3 class="widget-title">Auteur</h3>
                                <div class="ttm-author-widget" id="auteur-box">
                                    <script>
                                        document.getElementById("auteur-box").innerHTML = `
                                            <h6>${publication.auteur}</h6>
                                            <p class="author-widget_text">${publication["description-auteur"]}</p>`;
                                    </script>
                                </div>
                            </aside>

                            <!-- Tags -->
                            <aside class="widget tagcloud-widget">
                                <h3 class="widget-title">Tags</h3>
                                <div id="article-tags" class="tagcloud">
                                    <script>
                                        document.getElementById("article-tags").innerHTML = publication.tags
                                            .split(",")
                                            .map(tag => `<a class="tag-cloud-link">${tag}</a>`)
                                            .join("");
                                    </script>
                                </div>
                            </aside>
                            
                            <!-- Dernières publications -->
                            <aside class="widget post-widget">
                                <h3 class="widget-title">Dernières publications</h3>
                                <ul id='last-pubs' class="widget-post ttm-recent-post-list">
                                    <script>
                                        const lastPubs = JSON
                                            .parse(<?php 
                                                echo json_encode(file_get_contents("admin/data-handler/data/publications.json"), JSON_HEX_TAG);
                                            ?>)
                                            .publications
                                            .slice(0, 3);
                                        
                                        document.getElementById("last-pubs").innerHTML = lastPubs.map(pub => `
                                            <li>
                                                <img src="${pub.image}" alt="image">
                                                <span class="post-date">${pub.date}</span>
                                                <a href="publication.php?id=${pub.id}">${pub.titre}</a>
                                            </li>
                                        `).join("");
                                    </script>
                                </ul>
                            </aside>
                        </div>
                    </div>

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
</body>
</html>