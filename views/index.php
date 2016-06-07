<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MallMap</title>
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
        <div class="mainBodyContainer">
            <form action="serchResult.php" method="post">
               <p class="mainPageText">What shop do you want to find?</p>
               <input class="mainSearch" type="text" name="searchTeg" placeholder="Shop name">
               <br>
                <div class="displayInline">
                     <p class="mainPageText">Where the shop must be?</p>
                     <input class="mainSearchCity" type="text" name="searchCity" placeholder="City">
                </div>
               <div class="displayInline">
                     <p class="mainPageText">Where the shop must be?</p>
                     <input class="mainSearchAdress" type="text" name="searchAdress" placeholder="Adress">
                     <input class="geoButton" type="button" name="location" value="O">
                </div>
                <br>
                <input class="mainSearchButton" type="submit" name="searchSubmit" value="Show me what I want">
            </form>
        </div>
    </div>
    
    
    <!-- Footer -->
    <?php include('../tamplate/footer.php'); ?>
    
    
</body>
</html>