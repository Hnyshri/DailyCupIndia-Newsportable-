<div class="post_body">
    <?php
         include("includes/data.php");
   
				$query = "Select * from posts order by rand() LIMIT 0,4 "; 

				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$post_id = $row['post_id'];
					$title = $row['post_title'];
                    $date = $row['post_date'];
                    $author = $row['post_author'];
                    $image = $row['post_image'];
                    $content = substr($row['post_content'],0,200);
				
	?>
			<h2>
				<a href="page.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a>
			</h2>
			<p>Publish on:&nbsp;&nbsp;<b><?php echo $date; ?></b></p>
			<p align="right">Posted By:&nbsp;&nbsp;<b><?php echo $author; ?></b></p>
            <center><img src="images/<?php echo $image; ?>" width="400" height="200"></center>
			<p align="justify"><center><?php echo $content; ?></center>	</p>
			<p align="right"><a href="page.php?id=<?php echo $post_id;?>">Read more</a></p>			
        <?php }?>
</div>