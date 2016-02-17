<html>

<head>
    <title>Login</title>
    <!--styling-->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/css" />
</head>

<body>
    <h2>Login Here</h2>
    <form action="login_submit.php" method="post">
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
                <input type="submit" value="→ Login" />
            </p>
        </fieldset>
    </form>
    <form action = "add_user_submit.php" method = "post">
        <fieldset>
            <p>
                <input type="submit" value="→ Create Account" />
            </p>
        </fieldset>
    </form>
</body>

</html>