<!DOCTYPE html>
<html lang="en">
        <head><title>Business-Infromation</title>
        <meta charset="UTF-8">
        <meta name="description" content="Hnyshri - Shriyansh Gupta">
        <meta name="keywords" content="Hnyshri,honey, shriyansh, shriyansh gupta, hnyshri, Dailycup,news,newsletter,sport,tech,technology,about, bollywood, 
                    enjoy,business,forms, admit card, education , Contact, Shahjahanpur, Dehradun, dbit, Dbgi , mail ,shahjahanpur 
                    ,php developer, web site, result">
        <meta name="author" content="Shriyansh Gupta">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" media="screen" href="style.css">           
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">	
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="images/shri.png" type="image/png" sizes="20X20"> 
        </head>
        <body onload="myclock()">
            <!-- this is top file -->
            <div><?php include("includes/time.php");?></div>           
            <!-- this is header -->
            <div><?php include("includes/header.php");?></div>
            <div><?php include("includes/menu.php");?></div>
            <div><?php include("includes/sidebar.php");?></div>
            <div class="post_body">
                <?php
                    include("includes/data.php");   
                    $query = "Select * from business_posts order by rand() LIMIT 0,4 ";                    
			        $run = mysql_query($query);
			        while( $row = mysql_fetch_array($run))
			        {
				        $post_id = $row['id'];
				        $title = $row['business_title'];
                        $date = $row['business_date'];
                        $author = $row['business_author'];
                        $socail_link = $row['business_socail_link'];
                        $image = $row['business_image'];
                        $content = substr($row['business_content'],0,200);				
        	    ?>
		            <h2><a href="business_page.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a></h2>
        			<p>Publish on:&nbsp;&nbsp;<b><?php echo $date; ?></b></p>
		        	<p align="right">Posted By:&nbsp;&nbsp;<b><?php echo "<a href='".$socail_link."' target=_blank>$author</a>"; ?></b></p>
                    <center><img src="images/<?php echo $image; ?>" width="600" height="300"></center>
		        	<p align="justify"><center><?php echo $content; ?></center>	</p>
			        <p align="right"><a href="business_page.php?id=<?php echo $post_id;?>">Read more</a></p>			
                <?php }?>
            </div>           
            <!-- this is footer -->
            <div><?php include("includes/footer.php");?></div>
</div>
</body>
</html>