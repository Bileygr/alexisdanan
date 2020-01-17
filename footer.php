<?php
require_once("config/connect.php");
$connect = new Connect();
$connexion = $connect->connection();
$requete = $connexion->prepare("SELECT * FROM contact WHERE id=1");
$requete->execute();
$contact = $requete->fetch();
?>
    
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="assets/site/img/logo2.png" alt=""> </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2" id="contact">
                        <h4>Contactez nous</h4>
                        <p><?php echo $contact["numeroderue"].", ".$contact["rue"]." ".$contact["codepostal"]." ".$contact["ville"] ?></p>
                        <div class="contact_info">
                            <p><span class="ti-mobile"></span><?php echo $contact["telephonemobile"] ?> (mobile)</p>
                            <p><span class="ti-mobile"></span><?php echo $contact["telephonefixe"] ?> (fixe)</p>
                            <p><span class="ti-write"></span><?php echo $contact["fax"] ?> (fax)</p>
                            <p><span class="ti-email"></span><?php echo $contact["email"] ?></p>
                            <p><span class="ti-world"></span><a href="http://<?php echo $contact["siteweb"] ?>" style="color: inherit;text-decoration: none;"><?php echo $contact["siteweb"] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright Fédération des Comités Alexis Danan &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> 
| Images from <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@thepootphotographer?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from 🇸🇮 Janko Ferlič - @specialdaddy"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">🇸🇮 Janko Ferlič - @specialdaddy</span></a>
<a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@jonathanborba?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Jonathan Borba"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Jonathan Borba</span></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="assets/site/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="assets/site/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/site/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="assets/site/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="assets/site/js/swiper.min.js"></script>
    <script src="assets/site/js/wow.min.js"></script>
    <script src="assets/site/js/jquery.smooth-scroll.min.js"></script>
    <!-- swiper js -->
    <script src="assets/site/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="assets/site/js/owl.carousel.min.js"></script>
    <script src="assets/site/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="assets/site/js/slick.min.js"></script>
    <script src="assets/site/js/jquery.counterup.min.js"></script>
    <script src="assets/site/js/waypoints.min.js"></script>
    <!-- contact js -->
    <script src="assets/site/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/site/js/jquery.form.js"></script>
    <script src="assets/site/js/jquery.validate.min.js"></script>
    <script src="assets/site/js/mail-script.js"></script>
    <script src="assets/site/js/contact.js"></script>
    <!-- custom js -->
    <script src="assets/site/ js/custom.js"></script>
</body>
</html>