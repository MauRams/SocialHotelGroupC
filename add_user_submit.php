<?php 
/*** begin our session ***/ 
session_start(); 
/*** set a form token ***/ 
$form_token=md5( uniqid( 'auth', true) ); 
/*** set the session form token ***/ 
$_SESSION[ 'form_token']=$form_token; 
?>

<html>

<head>
    <title>Social Hotel Login</title>
        <!--styling-->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class = "text-center">Social Hotel</h1>
            <div class="col-md-4" id="logoStyle">
                <img src="img/hotelFront.png" id = "tempLogo"></img>
            </div>
            <div class="col-md-4">
                <h2 class = "text-center">Add user</h2>
                <form action="add_user.php" method="post">
                    <fieldset>
                        <p>
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" value="" maxlength="20" />
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input type="text" id="password" name="password" value="" maxlength="20" />
                        </p>
                        <p>
                            <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                            <input type="submit" value="&rarr; Login" />
                        </p>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-4">
                <img src="img/cityScape.jpg" class="img-responsive img-circle"></img>
            </div>
        </div>
    </div>


</body>

</html>