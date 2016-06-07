<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/css.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include('../tamplate/header.php'); ?>
    
    <div class="row">
       <div class="account_container">
           <h1>Hi, UserName !</h1>
           <div class="account_Avatar"></div>
           <div class="tabs_Account_container">
  <!-- Навигация -->
  <ul class="navigation_Tabs" role="tablist">
    <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Домой</a></li>
    <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Профиль</a></li>
    <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Сообщения</a></li>
  </ul>
  <!-- Содержимое вкладок -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active navigation_Tabs_content" id="home">...ываиываиывщгпащываыва</div>
    <div role="tabpanel" class="tab-pane navigation_Tabs_content" id="profile">...аиываиывщ</div>
    <div role="tabpanel" class="tab-pane navigation_Tabs_content" id="messages">.ывщгпащываыв..</div>
  </div>
           </div>
       </div>
       <div class="account_Recomend_Container">
           sfsd
       </div>
    </div>
    <!-- Footer -->
    <?php include('../tamplate/footer.php'); ?>
</body>
</html>