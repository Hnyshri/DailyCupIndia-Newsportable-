<!DOCTYPE html>
<html lang="en">
        <head><title>Dailycup</title>
        <meta charset="UTF-8">
        <meta name="description" content="Hnyshri - Shriyansh Gupta">
        <meta name="keywords" content="Hnyshri,honey, shriyansh, shriyansh gupta, hnyshri, Dailycup,news,newsletter,sport,tech,technology,about, bollywood, 
                    enjoy,business,forms, admit card, education, Contact, Shahjahanpur, Dehradun, dbit, Dbgi , mail ,shahjahanpur 
                    ,php developer, web site, result">
        <meta name="author" content="Shriyansh Gupta">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" media="screen" href="style.css">           
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">	
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="images/shri.png" type="image/png" sizes="20X20"> 
        </head>
        <body>
            <!-- this is top file -->
            <div><?php include("includes/time.php");?></div>
            
            <!-- this is header -->
            <div><?php include("includes/header.php");?></div>
            <div><?php include("includes/menu.php");?></div>
            <div><?php include("includes/sidebar.php");?></div>
            <div class="post_body">
                <?php
                    include("includes/data.php");
                    $page_id = $_GET['id'];
                    $query = "select * from posts where id='$page_id'";
    			    $run = mysql_query($query);
	    			while( $row = mysql_fetch_array($run))
		    		{		
		    			$title = $row['post_title'];
                        $date = $row['post_date'];
                        $author = $row['post_author'];
                        $socail_link = $row['post_socail_link'];
                        $image = $row['post_image'];
                        $content = $row['post_content'];              
                ?>
                    <h2  style=" margin-left:65px; margin-top:30px;"><?php echo $title; ?></h2>
        			<p style=" margin-left:65px;">Publish on:&nbsp;&nbsp;<b><?php echo $date; ?></b></p>
		        	<p align="right" >Posted By:&nbsp;&nbsp;<b><?php echo "<a href='".$socail_link."' target=_blank>$author</a>"; ?></b></p>
                    <center><img src="images/<?php echo $image; ?>" width="500" height="300"></center>
		        	<p align="justify"><center><?php echo $content; ?></center></p>		                
                    <?php } ?>
            </div>    
            <!-- this is footer -->
          
            <div><?php include("includes/footer.php");?></div>
</div>
</body>
</html>