<div id="sidebar">
    <!-- email subscriber -->
    <form style= " padding:3px;" action="" method="post" target ="popupwindow" onsubmit="">
      <p>Enter your email:</p>
        <center><input  id="button-size" placeholder=" email" type="text" style="width:140px" name="email"/>
        <input type="hidden" value="" name="url"/>
        <input type="hidden" value="en_US" name="loc"/>
        <input id="button-size" type="submit" value="subscriber"/>
      </center>
      <br>
    </form>
        <div><p>Recent Posts</p></div>
        <?php
            include("includes/data.php");
            if(isset($_GET['index_sidebar']) or !isset($_GET['id']))
            {
                $query = "select * from posts order by 1 DESC LIMIT 0,10";
                $run = mysql_query($query);
                while( $row = mysql_fetch_array($run))
                {		
                  $post_id = $row['id'];
                  $title = $row['post_title'];
                  $image = $row['post_image'];
            ?>            
                <center>
                <a href="page.php?id=<?php echo $post_id; ?>"><img src="images/<?php echo $image; ?>" width = "140" height = "140"></a>
                <a href="page.php?id=<?php echo $post_id; ?>"><h5><?php echo $title; ?></h5></a></center>
        <?php  }}?>
    
        <?php
            include("includes/data.php");
            if(isset($_GET['tech_sidebar']) or isset($_GET['id']))
            {
                $query = "select * from tech_posts order by 1 DESC LIMIT 0,10";
                $run = mysql_query($query);
                while( $row = mysql_fetch_array($run))  
                {		
                  $post_id = $row['id'];
                  $title = $row['tech_title'];
                  $image = $row['tech_image'];
        ?>            
                <center>
                <a href="tech_page.php?id=<?php echo $post_id; ?>"><img src="images/<?php echo $image; ?>" width = "140" height = "140"></a>
                <a href="tech_page.php?id=<?php echo $post_id; ?>"><h5><?php echo $title; ?></h5></a></center>
     <?php }}?>

        <?php
            include("includes/data.php");
            if(isset($_GET['business_sidebar']) or isset($_GET['id']))
            {
                $query = "select * from business_posts order by 1 DESC LIMIT 0,10";
                $run = mysql_query($query);
                while( $row = mysql_fetch_array($run))
                {		
                  $post_id = $row['id'];
                  $title = $row['business_title'];
                  $image = $row['business_image'];
            ?>            
                <center>
                <a href="business_page.php?id=<?php echo $post_id; ?>"><img src="images/<?php echo $image; ?>" width = "140" height = "140"></a>
                <a href="business_page.php?id=<?php echo $post_id; ?>"><h5><?php echo $title; ?></h5></a></center>
        <?php } }?>

        <?php
            include("includes/data.php");
            if(isset($_GET['sport_sidebar']) or isset($_GET['id']))
            {
                $query = "select * from sport_posts order by 1 DESC LIMIT 0,10";
                $run = mysql_query($query);
                while( $row = mysql_fetch_array($run))
                {		
                  $post_id = $row['id'];
                  $title = $row['sport_title'];
                  $image = $row['sport_image'];
            ?>            
                <center>
                <a href="sport.php?id=<?php echo $post_id; ?>"><img src="images/<?php echo $image; ?>" width = "140" height = "140"></a>
                <a href="sport.php?id=<?php echo $post_id; ?>"><h5><?php echo $title; ?></h5></a></center>
        <?php } }?>

        <?php
            include("includes/data.php");
            if(isset($_GET['enterainment_sidebar']) or isset($_GET['id']))
            {
                $query = "select * from bollywood_posts order by 1 DESC LIMIT 0,10";
                $run = mysql_query($query);
                while( $row = mysql_fetch_array($run))
                {		
                  $post_id = $row['id'];
                  $title = $row['entertainment_title'];
                  $image = $row['entertainment_image'];
            ?>            
                <center>
                <a href="Entertainment_page.php?id=<?php echo $post_id; ?>"><img src="images/<?php echo $image; ?>" width = "140" height = "140"></a>
                <a href="Entertainment_page.php?id=<?php echo $post_id; ?>"><h5><?php echo $title; ?></h5></a></center>
        <?php } }?>

          <?php
            include("includes/data.php");
            if(isset($_GET['contact_sidebar']) or isset($_GET['id']))
            {
                $query = "select * from posts order by rand() LIMIT 0,4";
                $run = mysql_query($query);
                while( $row = mysql_fetch_array($run))
                {		
                  $post_id = $row['id'];
                  $title = $row['post_title'];
                  $image = $row['post_image'];
            ?>            
                <center>
                <a href="page.php?id=<?php echo $post_id; ?>"><img src="images/<?php echo $image; ?>" width = "140" height = "140"></a>
                <a href="page.php?id=<?php echo $post_id; ?>"><h5><?php echo $title; ?></h5></a></center>
        <?php } }?>
</div>