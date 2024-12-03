<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Kontakt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/fixed.css">

    </head>
    <body>
        <div>
             <!--- Start Navigation --->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="./index.html#home"><img src="img/logoNavbar.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"> 
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.html#home">Start</a>
                        </li>
                      <!---  <li class="nav-item">
                            <a class="nav-link" href="./index.html#page2">Page2</a>
                        </li> --->
                        <li class="nav-item">
                            <a class="nav-link" href="./index.html#page2">Leistungen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./references.html">Referenzen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.html#page5">Über mich</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.html">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!---End Navigation--->
        
        <?php
        mail("detlefspohler@web.de", $_POST["betreff"], $_POST["nachricht"], "From: " . $_POST["absender"]);
        ?>
        <div class="mail-versendung text-center">
        <h3><i class="fa fa-check"></i> Ihre Nachricht wurde versendet.</h3>
        </div>
        <!---Start Footer--->
        
        <div id="contact" class="offset">
            <footer>
                <div class="row justify-content-center">
                    
                    <div class="col-md-5 text-center">
                        <img src="img/logo.png" class="logoimg">
                        <p><i class="fa fa-phone-square"></i> <strong>0171 9549743</strong><br>
                            <i class="fa fa-envelope"></i> <strong>detlefspohler@web.de</strong><br>
                            <a class="impressum" href="https://www.xing.com/profile/Detlef_Spohler"><i class="fab fa-xing-square"></i><strong> Xing</strong></a></p>
                        <a class="impressum" href="./impressum.html">IMPRESSUM</a>
                    </div>
                    <hr class="socket">
                    &copy;Jakob Spohler
                </div>
            </footer>
        </div>
        
        <!---End Footer--->
        
        
        
        
        
        
        
        
        <!--- Start Script Source Files --->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js"></script>
        <!--- End of Script Source Files --->
    </body>
</html>
