<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<?php include("components/head.php") ?>

<body>

    <!--page start-->
    <div class="page">

        <?php include("components/header.php") ?> 

        <?php include("components/title.php") ?>
        <script>setPageTitle("Ma commande")</script>

        <!--site-main start-->
        <div class="site-main">

            <section class="ttm-row checkout-section break-991-colum clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form name="checkout" method="post" class="checkout row" action="#">
                                <!-- Informations sur le client -->
                                <div class="col-lg-6">
                                    <div class="billing-fields">
                                        <h3>Informations sur le client</h3>

                                        <p class="checkout-form checkout-form-row-first">
                                            <label>Nom&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-tex" name="nom" placeholder="Nom" value="">
                                        </p>
                                        
                                        <p class="checkout-form checkout-form-row-last">
                                            <label>Prénoms&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="prenoms" placeholder="Prénoms" value="">
                                        </p>

                                        <p class="checkout-form">
                                            <label>Pays&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <select name="pays" class="country_to_state country_select"aria-hidden="true">
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="MA">Maroc</option>
                                                <option value="SN">Sénégal</option>
                                                <option value="">Autre (spécifier)</option>
                                            </select>
                                        </p>

                                        <p class="checkout-form">
                                            <label>Si autre pays&nbsp;<span class="optional">(optionnel)</span></label>
                                            <input type="text" class="input-text " name="autre-pays" placeholder="Entrez un autre pays" value="">
                                        </p>

                                        <p class="checkout-form checkout-form-row-first">
                                            <label>Ville&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-tex" name="ville" placeholder="Ville" value="">
                                        </p>
                                        
                                        <p class="checkout-form checkout-form-row-last">
                                            <label>Adresse&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-text " name="adresse" placeholder="Adresse" value="">
                                        </p>

                                        <p class="checkout-form checkout-form-row-first">
                                            <label>Téléphone&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <input type="text" class="input-tex" name="telephone" placeholder="Téléphone" value="">
                                        </p>
                                        
                                        <p class="checkout-form checkout-form-row-last">
                                            <label>Email&nbsp;<abbr class="required" title="required">*</abbr></label>
                                            <input type="email" class="input-text " name="email" placeholder="Email" value="">
                                        </p>
                                    </div>
                                </div>

                                <!-- Informations additionnelles -->
                                <div class="col-lg-6">
                                    <div class="additional-fields">
                                        <h3>Informations additionnelles</h3>
                                        <div class="additional-fields-wrapper">
                                            <p class="checkout-form" id="order_comments_field">
                                                <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Entrez les informations qui peuvent être utiles pour votre commande."></textarea>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Détails de la commmande -->
                                <div class="col-lg-12">
                                    <h3 id="order_review_heading">Détails de la commande</h3>
                                    <div id="order_review" class="checkout-review-order">
                                        <!-- Liste des produits -->
                                        <table class="shop_table checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Produit</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="produits-commande">
                                                <?php
                                                    $commande = $_SESSION["commande"];
                                                    
                                                    // $produit = getProduit($commande[0]);
                                                    print_r($commande[0]ù);
                                                    // for ($i=0; $i < count($commande); $i++) {
                                                    //     echo '<tr class="cart_item">
                                                    //         <td class="product-name">'. $produit["nom"] .'&nbsp;
                                                    //             <strong class="product-quantity">× '. $commande[$keys[$i]] .'</strong>
                                                    //         </td>
                                                    //         <td class="product-total">
                                                    //             <span class="Price-amount amount">
                                                    //                 '. $produit["prix"] .' <span class="Price-currencySymbol">F CFA</span>
                                                    //             </span>
                                                    //         </td>
                                                    //     </tr>';
                                                    // }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                        </span>0</span> F CFA</strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        
                                        <!-- Validation de commande -->
                                        <div id="payment" class="checkout-payment">
                                            <div class="checkout-form place-order clearfix">
                                                <p class="payment_policy">
                                                    <center>Vous serez bientôt contacté par un membre de notre équipe. Au besoin, vous pouvez <a href="nous-contacter.php">nous contactez</a><center>
                                                </p>
                                                <button type="submit" class="button ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-btn-bgcolor-darkgrey" name="checkout_place_order" id="place_order" value="Valider ma commande" data-value="Valider ma commande">Valider ma commande</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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