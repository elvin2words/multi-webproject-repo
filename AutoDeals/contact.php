<?php 
    if($_POST["submit"]) { 
        $to="cars@whkauto.com"; 
        $from=$_POST["senderEmail"]; 
        $name=$_POST["senderName"]; 
        $subject=$_POST["subject"]; 
        $message=$_POST["message"]; 
        $mailBody="Name: $name \n Email: $senderEmail \n \n $message"; 
        mail($to, $subject, $mailBody, "From: $sender <$senderEmail>"); 
        if ($mailsent){
            echo 'Your purchase request has been sent to the admins<br/>'
            echo 'They will get back in touch with you within a short period of time'
        } else {
            echo 'Error encountered in the message.'
        }
    }  
?>              


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="xxxxx">
        <link rel="icon" href="">
        <link rel="stylesheet" href="contact.css">

        <title></title>
    </head>
    <body>
        <!-- Start Navbar -->
        <div id="navig">
            <nav>
                <div class="container">
                    <input type="checkbox" id="ch1">
                    <label for="ch1" class="btn">
                        <i class="fas fa-bars"></i>
                    </label>

                    <div class="logo">
                        <img src="img/logo.png" width="360px" height="260px">
                    </div>
            
                    
                    <div class="navLinks">
                        <a href="index.html" target="#">Home</a>
                        <a href="buy.html" target="">Buy A Car</a>
                        <a href="sell.html" target="">Sell A Car</a>
                        <a href="https://autocash.whkauto.com/" target="_blank">Value A Car</a>
                        <a href="#" class="active" target="">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>

        <br>
 
        <body>
            <div class="contactus-container">
                <!-- contact-wrapper -->
                <div class="contact-wrapper margin-top-80">
                    <div class="contact-inner">
                        <div class="contact-map">
                            <!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.944461186776" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            <!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.944461186776" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                            <img src="img/faq2.png" width="100%" height="75%">
                            <div class="block-call">
                                <span class="text-1">Need help? Call us</span>
                                <span class="text-2">081 048 8888</span>
                            </div>
                        </div>

                        <div class="contact-content">
                            <div class="title-section">
                                <span class="title-label">OUR CONTACT</span>
                                <h2 class="title">Feel Free to Contact us Here</h2>
                            </div>
                      
                            <form method="post" action="contact.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="label-control">E-mail</label>
                                                <input type="email" placeholder="Input" name="senderEmail" class="form-control" placeholder="E-mail Address" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="label-control">Full Name</label>
                                            <input type="text" name="senderName" placeholder="Input" class="form-control" placeholder="Full Name" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="label-control">Subject</label>
                                            <input type="text" name="subject" placeholder="Input" class="form-control" placeholder="Subject" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="label-control">Message</label>
                                            <textarea class="form-control" name="message" placeholder="Message" rows="5" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" name="submit" class="button button-primary margin-right-15">
                                        <!-- <input type="submit" class="button button-outline-primary">Reset</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        <!-- Start Footer -->
        <section class="footer">
            <p class="copyright" style="color: black; background-color: rgb(253,206,11);">Copyright &copy; 2022 | Designed By <span>Roy Nyaumwe</span></p>
        </section>
    </body>
</html>



