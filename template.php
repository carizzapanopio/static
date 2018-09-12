<?php

    function startHtml($title= "CLV Event Management Inc."){
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";

        echo "<head>";
        echo "<meta author='Renz Arbie Baligod'>";
        echo "<meta email='rbie.baligod@gmail.com'>";
        echo "<meta charset='utf-8'>";
        echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
        echo "<title>$title</title>";
        echo "<meta name='description' content=''>";
        echo "<link rel='shortcut icon' href='images\icon\clvLogoV3.ico'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
        echo " <link rel='stylesheet' href='styles/bootstrap/bootstrap.css'>";
        echo " <link rel='stylesheet' href='styles/jquery/jquery.fullPage.css'>";
        echo " <link rel='stylesheet' href='styles/template.css'>";
        echo " <link rel='stylesheet' href='styles/nav.css'>";
        echo "<link href='https://fonts.googleapis.com/css?family=Arvo:700i|Josefin+Sans' rel='stylesheet'>";
        echo " <link rel='stylesheet' href='styles/font/Aleo-Light.otf'>";
    }


    function startBody(){
        echo "</head>";
        echo "<body>";
        echo "<div class='se-pre-con'></div>";
        //echo "<div class='lds-dual-ring'></div>";
        echo "<div class='hideBody full-height' id='wholeBody'>";
    }

    function hamburgerMenu(){
        echo "<div class='container-menu' onclick='toggleMenu(this)' id='drop'>";
        echo "<div class='bar1'></div>";
        echo "<div class='bar2'></div>";
        echo "<div class='bar3'></div>";
        echo "</div>";
    }

    function navigationMenu(){
        echo "<header>";
        echo "    <nav style='z-index: -99999;'>";
        echo "        <ul>";
        echo "            <li class=''>";
        echo "                <div class='voce'>";
        echo "                    <a href='aboutUs.php' style='display: table-cell;' onclick='bodyFadeOut()' class='link'>";
        echo "                        <div class='menuli century-font'>ABOUT US</div>";
        echo "                    </a>";
        echo "                </div>";
        echo "            </li>";
        echo "            <li class=''>";
        echo "                <div class='voce'>";
        echo "                    <a href='services.php' onclick='bodyFadeOut()' class='link'>";
        echo "                        <div class='menuli century-font'>SERVICES</div>";
        echo "                    </a>";
        echo "                </div>";
        echo "            </li>";
        echo "            <li  class=''>";
        echo "                <div class='voce'>";
        echo "                    <a href='careers.php' style='display: table-cell;' onclick='bodyFadeOut()' class='link'>";
        echo "                        <div class='menuli century-font'>CAREERS</div>";
        echo "                    </a>";
        echo "                </div>";
        echo "            </li>";
        echo "            <li class=''>";
        echo "                <div class='voce'>";
        echo "                    <a href='partners.php' style='display: table-cell;' onclick='bodyFadeOut()' class='link'>";
        echo "                       <div class='menuli century-font'>PARTNERS</div>";
        echo "                    </a>";
        echo "                </div>";
        echo "            </li>";
        echo "            <li class=''>";
        echo "                <div class='voce'>";
        echo "                    <a href='investors.php' style='display: table-cell;' onclick='bodyFadeOut()' class='link'>";
        echo "                       <div class='menuli century-font'>INVESTORS RELATIONS</div>";
        echo "                    </a>";
        echo "                </div>";
        echo "            </li>";
        echo "            <li class=''>";
        echo "                <div class='voce'>";
        echo "                    <a href='contactUs.php' style='display: table-cell;' onclick='bodyFadeOut()' class='link'>";
        echo "                       <div class='menuli century-font'>CONTACT US</div>";
        echo "                    </a>";
        echo "                </div>";
        echo "            </li>";
        echo "        </ul>";
        echo "    </nav>";
        echo "</header>";
    }

    function stickyMenu($pageTitle = ""){
        echo "    <div class='sticky'>";
        echo "        <div class='container'>";
        echo "            <a href='index.php' class='router-link-active'>";
        echo "            <img src='images/icon/clv_logo_colored.png' class='logo'/>";
        echo "            </a>";
        echo "        </div>";
        echo "    </div>";
        echo "    <div class='sticky-page-title'>$pageTitle</div>  ";
    }

    function socialMedia(){
        echo "</div>";
        echo "<footer>";
        echo "<div id='social'  style='display: block;'>";
        echo "   <div class='icon'>";
        echo "        <a href='https://www.facebook.com/CestLaVieEventManagementInc' target='_blank'><img src='images/icon/facebook.png' alt='facebook'></a>";
        echo "   </div>";
        echo "   <div class='icon'>";
        echo "        <a href='' target='_blank'><img src='images/icon/twitter.png' alt='twitter'></a>";
        echo "   </div>";
        echo "   <div class='icon'>";
        echo "       <a href='' target='_blank'><img src='images/icon/instagram.png' alt='instagram'></a>";
        echo "   </div>";
        echo "</div>";
        echo "</footer>";
    }

    function reachUs(){
        echo "<a href='contactUs.php'><div class='reachUsLink'></div></a>";
    }

    function footer(){
        echo "    <footer class='footer'>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-xs-3 footerDetail'>";
        echo "<span>";
        echo "230 Narra St. <br />";
        echo "Marikina Heights,<br />";
        echo "Marikina City, 1800";
        echo "</span>";
        echo "</div>";
        echo "<div class='col-xs-3 footerDetail'>";
        echo "<span>";
        echo "02.954-22-54";
        echo "</span>";
        echo "    </div>";
        echo "<div class='col-xs-3 footerDetail'>";
        echo "<span>";
        echo "info@clv.com.ph";
        echo "</span>";
        echo "</div>";
        echo "<div class='col-xs-3 footerDetail'>";
        echo "<span>";
        echo "www.facebook.com/clv";
        echo "</span>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</footer>";
    }

    function scriptTemplate(){
        echo  "<script src='scripts/js/jquery.3.2.1.js'></script>";
        echo  "<script src='scripts/bootstrap/bootstrap.js'></script>";
        //echo  "<script src='scripts/js/modernizr.js'></script>";
        echo  "<script src='scripts/index.js'></script>";
     }

     function scriptTemplateWithoutIndex(){
        echo  "<script src='scripts/js/jquery.3.2.1.js'></script>";
        echo  "<script src='scripts/bootstrap/bootstrap.js'></script>";
        echo  "<script src='scripts/js/modernizr.js'></script>";
        echo  "<script src='scripts/js/jquery.fullPage.js'></script>";
     }

    function endHtml(){
        echo "</div>";
        echo "</body>";
        echo "</html>";
    }
?>
