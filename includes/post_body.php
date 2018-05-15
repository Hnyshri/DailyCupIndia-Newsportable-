<div class="post_body">
    <?php
         include("includes/data.php");
				$query = "Select * from posts order by rand() LIMIT 0,4 "; 			
				// $query =" SELECT * FROM posts UNION SELECT * FROM business_posts UNION SELECT * FROM sport_posts UNION SELECT * FROM tech_posts  UNION SELECT * FROM bollywood_posts order by rand() LIMIT 0,7";
				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$post_id = $row['id'];
					$title = $row['post_title'];
                    $date = $row['post_date'];
					$author = $row['post_author'];
					$socail_link = $row['post_socail_link'];
                    $image = $row['post_image'];
                    $content = substr($row['post_content'],0,200);
				
	?>
			<h2>
				<a href="page.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a>
			</h2>
			<p>Publish on:&nbsp;&nbsp;<b><?php echo $date; ?></b></p>
			<p align="right">Posted By:&nbsp;&nbsp;<b><?php echo "<a href='".$socail_link."' target=_blank>$author</a>"; ?></b></p>
            <center><img src="images/<?php echo $image; ?>" width="500" height="300"></center>
			<p align="justify"><center><?php echo $content; ?></center></p>
			<p align="right"><a href="page.php?id=<?php echo $post_id;?>">Read more</a></p>			
        <?php }?>
</div>
