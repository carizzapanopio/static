<?php
require_once("template.php");
 
if(isset($_POST['submit'])){
    $to = "temp@ivongolia.x10host.com"; // this is your Email address
    $from = $_POST['txtEmail']; // this is the sender's Email address
    $contact = $_POST['txtContact'];
    $first_name = $_POST['txtName']; 
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['txtMessage'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['txtMessage'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    startHtml("Contact Us");

?>
    <!-- Styles Start Here -->
<link rel="stylesheet" type="text/css" href="styles/contactUs.css">
<?php
  startBody();
  navigationMenu();
  hamburgerMenu();
  stickyMenu("CONTACT US");
?>

<a href="https://www.google.com.ph/maps/search/c'est+la+vie+ph/@14.6367484,121.092429,13z">
<div class="wide"></div>
</a>
    <div class="container formContainer">
        <div class="form-wrapper">
            <form action="" method="POST">
                <div class='row'>
                    <div class='col'>

                        <div class="row">
                             <div class="col-sm-12 col-md-4">
                                <label for="txtName" class="txt-label">*NAME</label>
                             </div>
                             <div class="col-sm-12 col-md-8">
                                <input id="txtName" name="txtName" class="txt"/>
                             </div>
                        </div>
                        <div class="row">
                             <div class="col-sm-12 col-md-4">
                                <label for="txtEmail" class="txt-label">*EMAIL</label>
                             </div>
                             <div class="col-sm-12 col-md-8">
                                <input id="txtEmail" name="txtEmail" class="txt"/>
                             </div>
                        </div>
                        <div class="row">
                             <div class="col-sm-12 col-md-4">
                                <label for="txtContactNo" class="txt-label">*CONTACT NO.</label>
                             </div>
                             <div class="col-sm-12 col-md-8">
                                <input id="txtContactNo" name="txtContactNo" class="txt"/>
                             </div>
                             <!-- <div class="col-sm-12 col-md-2 text-right submitOnWeb">
                                <input type="button" name="btnSend" value="SEND" class="btn btn-default btnFormat">
                             </div> -->
                        </div>
                        <div class="row">
                             <div class="col-sm-12 col-md-4">
                                <label for="txtMessage" class="txt-label">*MESSAGE</label>
                             </div>
                             <div class="col-sm-12 col-md-8">
                                <!-- <input id="txtMessage" name="txtMessage" class="form-control txt" style="margin-left:-30px;"/> -->
                                <textarea name="txtMessage" id="txtMessage" class="txt"
                                 cols="30" rows="5"></textarea>
                             </div>
                        </div>
                        <div class="row" id='submit-btn'>
                            <div class="col-sm-12">
                                <input type="button" name="btnSend" value="SEND" class="btn btn-default btnFormat">
                            </div>
                        </div>

                    </div>

                    <div class='col-sm-2' id='web-submit-btn'>
                                <input type="button" name="btnSend" value="SEND" class="btn btn-default btnFormat">

                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <footer class="footer">
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
    // footer();
    scriptTemplate();
?>
    <script src="scripts/reachUs.js"></script>
<?php
    endHtml();
?>
