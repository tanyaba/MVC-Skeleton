            <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>What's up London</title>
            <link rel="stylesheet" href="views/css/styles.css">
            <!--navbar bootstrap-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!--google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
            <!--social share buttons-->
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <script src="https://apis.google.com/js/platform.js" async defer></script>
        </head> 
        <body>    
            <div class="topnav" id="topnav">
               <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="?controller=comment&action=categoryone">What's On</a></li>
                <li><a href="?controller=comment&action=categorytwo">Food & Drink</a></li>
                <li><a href="?controller=comment&action=categorythree">Social</a></li>
                <li><a href="?controller=comment&action=categoryfive">Sight Seeing</a></li>
                <li><a href="?controller=comment&action=categorysix">Hotels</a></li>
                <li><a href="www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook" style="margin-left: 400px"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><i class="fa fa-search" style="color: white;margin-top: 20px "></i></li>
                 <form action="index.php" method="GET" role="form" id="searchform" class="navbar-form navbar-right">
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                        <input type="hidden" name="controller" value="article">
                        <input type="hidden" name="action" value="searchAll">
                        <span class="input-group-btn">
                            <button type="submit" id="search" class="btn btn-default">
                                <span class="glyphicon glyphicon-search">
                                </span>
                            </button>
                        </span>
                    </div>
                </form>
               </ul>
              <?php
                    if (isset($_SESSION['blogger_id'])){
                        echo "<ul>";
                        echo "<li><a href='?controller=article&action=readAll'>Amend articles</a></li> ";
                        echo "<li><a href='?controller=article&action=createArticle'>Create New Article</a></li>";
                        echo "</ul>";
                        
                    }
                    ?>
           </div>


            <div class='container' >
                <?php require_once('routes.php'); ?>
            </div>
            <div class="footer">
                <ul>
                <li><p style="margin-top:15px;font-size: small">@WhatsUpLondon2018</p></li>
                <li><a href="#AboutUs"><p style="font-size: small;margin-left: 60px"> About Us</p></a></li>
                <li><a href="#ContactUs"><p style="font-size: small">Contact Us</p></a></li>
                  <li><a href='?controller=pages&action=unsubscribe'>Unsubscribe</a></li>
                  <li><a href='?controller=blogger&action=login'>Blogger login</a></li>
                <p><button class="w3-btn" style="margin-top: 15px;background-color: grey">Member Login<i class="w3-margin-left fa fa-user"></i></button></p>
                </ul>
          </div>
    </body>
    </html>                            
                   
