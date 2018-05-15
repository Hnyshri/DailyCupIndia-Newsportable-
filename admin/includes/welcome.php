<?php
	@session_start();
	if(!$_SESSION['admin_name']){
		header('location:login.php?error= you are not an administrator');}
?><!DOCTYPE html>
<html lang="en">
        <head><title>Hnyshri-Shriyansh Gupta</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel="stylesheet" media="screen" href="style.css">        
            <link rel="icon" href="Hnyshri.png" type="image/png" sizes="20X20"> 
        </head>
        <body>
            <!-- this is top file -->
            <div id="top">Welcome:<font size='4' color='red' align="left"><?php echo $_SESSION['admin_name'];?></font>
            <h2 align="right"><a href="logout.php" style='margin-left:30px;'>Log out</a></h2></div>
            
            <!-- this is header -->
            <div><?php include("includes/header.php");?></div>
            <div><?php include("includes/menu.php");?></div>
            <div><?php include("includes/sidebar.php");?></div>
            <div><?php include("includes/post_body.php");?></div>    
            <!-- this is footer -->
            <div class="footer">footer</div>
</div>
</body>
</html>