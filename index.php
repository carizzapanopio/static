<?php
require_once "template.php";

startHtml();
?>
     <!-- Styles Start Here -->
     <link rel="stylesheet" href="styles/index.css" type="text/css">
  </head>
  <body>
<?php
navigationMenu();
stickyMenu();
?>
     <div class="se-pre-con" style="display: none;"></div>
     <div class="full-height" id="wholeBody" style="display: block;">
        <div class="container-menu" onclick="toggleMenu(this)" id="drop">
           <div class="bar1"></div>
           <div class="bar2"></div>
           <div class="bar3"></div>
        </div>
        <!-- Body starts Here e.g. container -->
        <div class="particles-js" id="particles-js" style="height:100%;width:100%;">
           <canvas class="particles-js-canvas-el" width="0" height="0" style="width: 100%; height: 100%;"></canvas>
        </div>
        <img src="images/logo/homeLogo.png" class="centerImage"/>
    </div>
<?php
socialMedia();
?>
     <script src="scripts/js/jquery.3.2.1.js"></script>
     <script src="scripts/bootstrap/bootstrap.js"></script>
     <script src="scripts/js/modernizr.js"></script>
     <script src="scripts/index.js"></script>
     <script type="text/javascript" src="scripts/particle/particles.js"></script>
     <script type="text/javascript" src="scripts/particle/particle-config.js"></script>
  </body>
</html>
