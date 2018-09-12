<?php
require_once "template.php";

startHtml("Investors Relations");
?>
    <!-- Styles Start Here -->
    <link rel="stylesheet" type="text/css" href="styles/investors.css">

<?php
startBody();
hamburgerMenu();
navigationMenu();
stickyMenu("Investors Relations");
?>

<div class="container">
    <div id="section"> 
        <div class="container text-center" id="sectionBody">
            <h2>INVESTORS RELATIONS PROGRAM</h2>
            <p id="sectionParagraph">
                C'est La Vie Event Management Inc.'s Investors Relations Program is monitored and led<br />
                by our Investor Relations Officer, Ms. Claire Nevado, who has the responsibility of ensuring accurate and <br />
                timely communication of information, including access to official announcements, disclosures and<br />
                market sensitive information, relating to the Company. 
                <br /><br />
                We comply with the repotorial requirements of all the Securities and Exchange Commission ("SEC to provide")<br />
                the investing public an accurate assessment of the Company's financial performance and forecasts.
                <br /><br />
                We timely disclose our financial result through the filing of the Quarterly Report (SEC Form 17-Q)<br />
                and year-end financial statements (SEC Form 17-A), which includes a detailed management's discussion and analysis.
                <br /><br />
                Our financial reporting disclosures are in compliance with the SEC requisites.<br />
                We also ensure our compliance with applicable law, rules, and regulations prescribed by the SEC.<br />
                Any market-sensitive information is immediately disclosed to the SEC and then released<br />
                through various modes of communication (i.e. press release and company website).<br />
                The company website is regularly reviewed and maintained.<br /><br />
                The Company aims that the company website be an effective channel for the Company's directors<br />
                and officers to communicate to its shareholders and other stakeholders.
            </p>
        </div>
    </div>
</div>


<footer class="footer slant">
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
?>
    <script src="scripts/investors.js"></script>
<?php
endHtml();
?>
