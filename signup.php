<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>sign UP Forga!</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="up.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <h1>Sign up</h1>
            <form action="script.php" method="post">
                <input type="text" placeholder="Username" name="username">
                <input type="text" placeholder="Enter your E-mail" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="LOGIN">
            </form>
            <div class="bottom-text">
                <input type="checkbox" name="remember" checked="checked"> Remember me 
                <a href="#">Forget Password</a>
                <br>
                <a href="SIGN.html" class="spacing">sign in</a>
            </div>
    
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div id="over-layou"></div> 
    </body>
</html>
