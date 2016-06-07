<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/css.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include('../tamplate/header.php'); ?>
    
    
    
     <!-- Body -->
    <div class="row">
        <div class="loginBodyContainer">
            <div class="loginForm">
               <h1>Already registred?</h1>
                <form action="account.php" method="post">
                     <input class="loginLogin" name="loginLogin" type="text" placeholder="Login">
                     <br>
                     <input class="loginPassword" name="loginPassword" type="password" placeholder="Password">
                     <br>
                    <input  class="loginSubmitButton" name="loginSubmit" type="submit" value="Login">
                    <p>or</p>
                    <div class="icons"><span class="iconFacebook"></span> <span class="iconTwitter"></span> <span class="iconGmail"></span></div>
                </form>
            </div>
            <div class="registerForm">
                <h1>What to join?</h1>
                <form action="" method="post">
                     <select class="loginLogin" name="registerType">
                     <option>Customer</option>
                     <option>Shop owner</option>
                     </select> 
                     <input class="loginLogin" name="registerEmail" type="text" placeholder="E-mail">
                     <br>
                     <input class="loginLogin" name="registerName" type="text" placeholder="Name"> 
                     <input class="loginLogin" name="registerLogin" type="password" placeholder="Login">
                     <br>
                     <input class="loginPassword" name="registerPassword" type="password" placeholder="Password"> 
                     <input class="loginPassword" name="registerPasswordRepeat" type="password" placeholder="Repeat password">
                     <br>
                    <input  class="loginSubmitButton" name="registerSubmit" type="submit" value="Register">
                     <p>or</p>
                    <div class="icons">
                    <span class="iconFacebook"></span> <span class="iconTwitter"></span> <span class="iconGmail"></span></div>
                </form>
            </div>
        </div>
    </div>
    
    
    
       <!-- Footer -->
    <?php include('../tamplate/footer.php'); ?>
    
</body>
</html>