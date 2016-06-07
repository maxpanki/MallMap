<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/css.css" rel="stylesheet">
</head>
<body>
   <!-- Header -->
    <?php include('../tamplate/header.php'); ?>
    
    <div class="row">
       <div class="searchContainer">
          <div class="resultPosition">
            <div class="displayInline">
              <input type="button" name="inList">
              <input type="button" name="inColumn">
              Sort by: <select class="sortBy">
                  <option>Popularity</option>
                  <option>Distance</option>
                  <option>Matching</option>
              </select>
            </div>
            <div class="inNumber">
              <input type="button" name="inTen" value="10">
              <input type="button" name="inTwenty" value="20">
              <input type="button" name="inThirty" value="30">
            </div>
          </div>
           <div class="searchResult">
               <img class="searhImg" />
               <div class="searchResultDescription">
                   <h3>Shop Name</h3>
                   <h5>Adress / distance</h5>
               </div>
                   <a class="searchShowButton" href="#">SHOW</a>
           </div>
           <div class="searchResult">
               <img class="searhImg" />
               <div class="searchResultDescription">
                   <h3>Shop Name</h3>
                   <h5>Adress / distance</h5>
               </div>
                   <a class="searchShowButton" href="#">SHOW</a>
           </div>
           <div class="searchResult">
               <img class="searhImg" />
               <div class="searchResultDescription">
                   <h3>Shop Name</h3>
                   <h5>Adress / distance</h5>
               </div>
                   <a class="searchShowButton" href="#">SHOW</a>
           </div>
           <div class="searchResult">
               <img class="searhImg" />
               <div class="searchResultDescription">
                   <h3>Shop Name</h3>
                   <h5>Adress / distance</h5>
               </div>
                   <a class="searchShowButton" href="#">SHOW</a>
           </div>
           <div class="searchResult">
               <img class="searhImg" />
               <div class="searchResultDescription">
                   <h3>Shop Name</h3>
                   <h5>Adress / distance</h5>
               </div>
                   <a class="searchShowButton" href="#">SHOW</a>
           </div>
       </div>
       <div class="searchFilterContainer">
         <h1>Filters</h1>
          <form action="" method="post">
              <label for="searchTeg">Shop name:</label>
              <input class="filterSectionInput" type="text" name="searchTeg">
              <br>
              <label for="searchCity">City:</label>
              <input class="filterSectionInput" type="text" name="searchCity">
              <br>
              <label for="searchAdress">Adress:</label>
              <input class="filterSectionInput" type="text" name="searchAdress">
              <br>
              <label for="categorySelect">Category:</label>
              <select class="filterSectionInput" name="categorySelect">
                  <option>Eat</option>
                  <option>Cloths</option>
                  <option>Video Games</option>
                  <option>ARG</option>
                  <option>Tourism</option>
              </select>
              <br>
              <input  class="filterSearchButton" name="searchSubmit" type="submit" value="Search">
          </form>
       </div>
    </div>
    
    <!-- Footer -->
    <?php include('../tamplate/footer.php'); ?>
    
</body>
</html>