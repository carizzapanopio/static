<?php
require_once "template.php";

startHtml("Partners");
hamburgerMenu();
navigationMenu();
stickyMenu("PARTNERS");

?>
    <!-- Styles Start Here -->
<link rel="stylesheet" type="text/css" href="styles/partners.css">
<?php startBody();?>

    <!-- Body starts Here e.g. container -->
<div id="partners">
    <img src="images/partnersV2.jpg" alt="PARTNERS" srcset="" class="partnersImg" id="img">
</div>

<footer class="footer slant partnersFooter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    230 Narra St. <br />
                    Marikina Heights, <br />
                    Marikina City,  1810
                </div>
                <div class="col-xs-12 col-md-5">
                    02.954-22-54 <br />
                    02.956-50-16 <br/>
                    Cèst La Vie Event Management&copy; 
                </div>
                <div class="col-xs-12 col-md-3">
                    info@clv.com.ph <br/>
                    PRIVACY POLICY
                </div>
            </div>
        </div>
    </footer>
<?php
reachUs();
scriptTemplate();
endHtml();

?>
