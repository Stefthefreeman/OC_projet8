<footer id="footer" class="footer-light">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v12.0"
            nonce="TRkNkJzM"></script>
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <!-- Footer Logo -->
                        <img class="footer-logo footer-2 p-5 w-25" src="logo_inveserd-small-bg-transparent.png"
                             alt="Logo KaleoWeb"/>

                        <!-- Small Description -->
                        <p class="mb-50"><small>SAS
                                au capital de 500€<br/>R.C.S. Avignon 907 700 504 </small></p>

                    </div>
                    <div class="col-md-6 col-sm-6 pull-right">
                        <span class="font-style-italic">CONSEILS, AVIS, DEVIS GRATUIT SANS ENGAGEMENT.</span>

                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                        <!-- Newsletter Form -->
                        <p class="mb-10">Restons en <strong>contact </strong></p>

                        <form id="newsletterForm" action="php/newsletter.php" class="box-shadow-2 " method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="Entrez votre email" required="required">
                                <span class="input-group-btn">
									<button class="btn btn-info" type="submit">J'accepte</button>
								</span>
                            </div>
                        </form>
                        <!-- /Newsletter Form -->
                    </div>

                    <div class="col-md-6 col-sm-6 hidden-xs-down">

                        <!-- Social Icons -->
                        <div class="ml-50 clearfix pull-right">

                            <p class="mb-10">Nous acceptons ces moyens de paiement</p>

                            <img src="assets/images/_smarty/cc/PayPal.png"/>|<img
                                    src="assets/images/_smarty/cc/Visa.png"/>|<img
                                    src="assets/images/_smarty/cc/Mastercard.png"/>|<img
                                    src="assets/images/_smarty/cc/American-Express.png"/>


                        </div>


                    </div>


                </div>
            </div>

        </div>

    </div>

    <div class="copyright">
        <div class="container">


            &copy; Tous droits r&eacute;serv&eacute;s, KaleoWeb <?= date('Y') ?> | <span><a href="mentions-legales.html"
                                                                                            target="_blank">Mentions légales</a></span>
        </div>
    </div>
    <!-- Messenger Plugin de discussion Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de discussion code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "610375429424268");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>


    <!-- Cookie Consent by https://www.PrivacyPolicies.com -->
    <script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/4.0.0/cookie-consent.js"
            charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({
                "notice_banner_type": "headline",
                "consent_type": "express",
                "palette": "dark",
                "language": "fr",
                "page_load_consent_levels": ["strictly-necessary"],
                "notice_banner_reject_button_hide": true,
                "preferences_center_close_button_hide": false,
                "website_name": "KaleoWeb"
            });
        });
    </script>

    <noscript>Cookie Consent by <a href="https://www.privacypolicies.com/privacy-policy-generator/"
                                   rel="nofollow noopener">Privacy Policies Generator website</a></noscript>
    <!-- End Cookie Consent -->
</footer>