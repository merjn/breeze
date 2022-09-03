<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Habbo: World Connected</title>

    <link type="text/css" href="/themes/modernflat/css/index.css" rel="stylesheet">
</head>

<body>
<!--<div class="error-msg">Die Felder müssen ausgefüllt sein.</div>-->

<div class="hero">
    <div class="hotel"></div>
</div>

<div id="header-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo"></div>
                <div class="online-count"><b>0</b> players online</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="login-position">
                <h2>Login</h2>
                <form method="post">
                    @csrf
                    <label for="login-username">Username</label>
                    <input type="text" name="login-username" id="login-username">

                    <label for="login-password">Password</label>
                    <input type="password" name="login-password" id="login-password">

                    <button class="btn big green login-button">Log in</button>
                </form>
                <div class="clear"></div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Or</p>
                    </div>
                    <div class="col-md-12">
                        <a href="register/step-1.php" class="btn big orange register-button">Create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="footer-content">
                <ul class="footer-links">
                    <li><a href="">Homepage</a></li>
                    <li><a href="">News articles</a></li>
                    <li><a href="">Staff page</a></li>
                </ul>
                <p class="footer">Habbo Hotel &copy;  All rights reserved.<br />Habbo Hotel is powered by Breeze - a Content Management System by Merijn.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
