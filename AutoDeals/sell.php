                                
<?php 
if($_POST["submit"]) { 
    $to="cars@whkauto.com"; 
    $from=$_POST["email"]; 
    $make=$_POST["makemodel"]; 
    $year=$_POST["regyear"]; 
    $milage=$_POST["milage"]; 
    $location=$_POST["location"]; 
    $subject="Sale Request"; 
    $message="Sale Offer for the vehicle with the following details";
    $headers='From: '.$from.'\r\n'
    $mailBody="Email: $email \n $message \n \n 
            Make&Model: $make \n 
            Registered: $year \n
            Milage: $milage \n
            Location: $location \n "; 
    mail($to, $subject, $mailBody, $headers ); 
    if ($mailsent){
        echo 'Your sale offer has been made<br/>'
        echo 'The admins will get back to you shortlye'
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
        <link rel="stylesheet" href="all.css">
        <link rel="stylesheet" href="styles.css">
        
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
                        <a href="sell.html" class="active" target="">Sell A Car</a>
                        <a href="https://autocash.whkauto.com/" target="_blank">Value A Car</a>
                        <a href="contact.html" target="">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>

        <body>
            <div class="container">

                <img id="forsell" src="img/for-sell.png" height="150px" width="550px">
                <img id="sell1" src="img/sell1.png" height="218px" width="258px">
<!-- 
                <div class="info">
                    <h1>FASTEST, SAFEST<BR>AND EASIEST WAY.</h1>
                </div> -->
                <div class="sellform" >
                    <div class="title-section margin-bottom-30">
                        <b><h2 class="title" style="text-align:center; margin-top:20px; margin-bottom: 10px; color: rgb(4, 4, 75);">Get a FREE Offer for your car in seconds!</h2></b>
                    </div>

                    <form method="post" action="sell.php"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="label-control">Search Make and Model</label>
                                    <input type="text" placeholder="" class="form-control" name="makemodel">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="year">
                                    <label class="label-control">Registration Year</label>
                                    <input type="text" class="form-control" name="regyear">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="milage">
                                    <label class="label-control">Milage</label>
                                    <input type="text" class="form-control" name="milage">
                                </div>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="label-control">Location</label>
                                    <input type="text" class="form-control" name="location">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group" style="justify-content:center;">
                                    <!-- <label class="label-control">Email</label>
                                    <input type="text" class="form-control" name="email"> -->
                                    <input type="submit" name="sell" class="type-1" value="Sell Now">
                                    <!-- <button type="submit" style="width: 40%; float:center; background-color: rgb(4, 4, 75);"><span class="button-text">SellNow</span></button> -->


                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <input type="submit" name="reset" style="width: 40%; ; float:left; background-color: grey" value="Reset">

                                <!-- <button type="reset" class="button button-outline-primary">Reset</button> -->
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </body>

        <!-- Start Footer -->
        <section class="footer">
            <p class="copyright" style="color: black; background-color: rgb(253,206,11);">Copyright &copy; 2022 | Designed By <span>Roy Nyaumwe</span></p>
        </section>
    </body>
</html>
                
