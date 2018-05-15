<div id="sidebar">
    <!-- email subscriber -->
    <form style= " padding:3px;" action="" method="post" target ="popupwindow" onsubmit="">
      <p>Enter your email:</p>
        <center><input type="text" style="width:140px" name="email"/>
        <input type="hidden" value="" name="uri"/>
        <input type="hidden" value="en_US" name="loc"/>
        <input type="submit" value="subscriber"/>
      </center>
    </form>
    <div class="social">
            <ul class="link-part">
                <li class="zoom">
                    <a href="https://www.facebook.com/shriyansh.gupta.3"  target="_blank" ><img src="images/fb.png" alt="facebook"></a>
                </li>

                <li class="zoom">
                    <a href=""  target="_blank" ><img src="images/google.png" alt="twitter"></a>
                </li>

                <li class="zoom">
                    <a href="https://www.linkedin.com/in/hnyshri-2129b3128/&amp;locale=en_US"  target="_blank" ><img src="images/Linkedin.png" alt="linkedin"></a>
                </li>
                <li class="zoom">
                    <a href="https://github.com/Hnyshri"  target="_blank" ><img src="images/github.png" alt="github"></a>
                </li>
                <li class="zoom">
                    <a href="https://www.instagram.com/hnyshri/?hl=en"  target="_blank" ><img src="images/instagram.jpeg" alt="instagram"></a>
                </li>
                <li class="zoom">
                    <a href="https://plus.google.com/u/0/117853009398356119464"  target="_blank" ><img src="images/google.png" alt="google+"></a>
                </li>
            </ul>
    </div>                
        <?php
            include("includes/data.php");
            $query = "select * from posts order by 1 DESC LIMIT 0,4";
            $run = mysql_query($query);
            while( $row = mysql_fetch_array($run))
            {		
              $post_id = $row['post_id'];
              $title = $row['post_title'];
              $image = $row['post_image'];
        ?>            
            <center>
            <a href="page.php?id=<?php echo $post_id; ?>"><img src="images/<?php echo $image; ?>" width = "140" height = "140"></a>
            <a href="page.php?id=<?php echo $post_id; ?>"><h5><?php echo $title; ?></h5></a></center>
            <?php }?>
    
</div>