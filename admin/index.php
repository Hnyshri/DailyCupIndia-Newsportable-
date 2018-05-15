<?php
session_start();
session_cache_expire(2);
if(!isset($_SESSION['user_name'])) #or !isset($_COOKIE["login"])
{
    header("location:login.php");
}
else{
?><html>
    <head><title>Admin Panel-Shriyansh </title> 
        <link type="text/css" rel="stylesheet" media="screen" href="admin_style.css">
    </head>
    <body>
        <header><h1 ><a href="index.php"><font color="white">Welcome to News Seltter</font></a></h1>
                 <h2 style="margin-top:-50px; float:right;"><a href="logout.php"><font color="white">Logout</font></a></h2>
        </header>
        <aside class="navbar">
             Welcome:<font color= "red" size="5"><?php echo $_SESSION['user_name'];?></font>
            <?php include("side_nav.php");?>
        </aside>
        <center><h1><?php echo @$_GET['deleted'];?></h1></center>
        <center><h1><?php echo @$_GET['published'];?></h1></center>
        <center><h1><?php echo @$_GET['post'];?></h1></center>

        <center><h1><?php echo @$_GET['tech_deleted'];?></h1></center>
        <center><h1><?php echo @$_GET['tech_published'];?></h1></center>
        <center><h1><?php echo @$_GET['tech_post'];?></h1></center>

        <center><h1><?php echo @$_GET['business_deleted'];?></h1></center>
        <center><h1><?php echo @$_GET['business_published'];?></h1></center>
        <center><h1><?php echo @$_GET['business_post'];?></h1></center>

         <center><h1><?php echo @$_GET['sport_deleted'];?></h1></center>
        <center><h1><?php echo @$_GET['sport_published'];?></h1></center>
        <center><h1><?php echo @$_GET['sport_post'];?></h1></center>

         <center><h1><?php echo @$_GET['entertainment_deleted'];?></h1></center>
        <center><h1><?php echo @$_GET['entertainment_published'];?></h1></center>
        <center><h1><?php echo @$_GET['entertainment_post'];?></h1></center>

        <!-- -/-/////////////////////// New post//////////////////////////////// -->
        <?php
            if(isset($_GET['insert']))
            {
                include("insert_post.php");
            }        
        ?>

       <?php if(isset($_GET['view'])) { ?> 
       <table width="1000" border="3" align="center">
			<tr>
				<td  colspan="9" bgcolor="white" align="center">
					<h2>View New post</h2>
				</td>
			</tr>
			<tr align="center">
				<th>Post no</th>
				<th>Post title</th>
                <th>Post date</th>	
                <th>Post Author</th>	
                <th>Author's Link</th>
                <th>Post Image</th>	
                <th>Post Content</th>	
                <th>Edit</th>	
                <th>Delete</th>	
            </tr>
            <?php
            include("includes/data.php");
            $i=1;
            if(isset($_GET['view']))
            {
                $query = "Select * from posts order by 1 DESC"; 
				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$id = $row['id'];
					$title = $row['post_title'];
                    $date = $row['post_date'];
                    $author = $row['post_author'];
                    $socail_link = substr($row['post_socail_link'],0,10);
                    $image = $row['post_image'];
                    $content = substr($row['post_content'],0,50);
            
        ?>
            <tr align="center">
                <td><?php echo $i++;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $date;?></td>
                <td><?php echo $author;?></td>
                <td><?php echo $socail_link;?></td>
                <td><img src="../images/<?php echo $image; ?>" width="85" height="50"></td>
                <td><?php echo $content;?></td>
                <td><a href="edit.php?edit=<?php echo $id; ?>"><font color="white">Edit</font></a></td>
                <td><a href="delete.php?del=<?php echo $id; ?>"><font color="white">Delete</font></a></td>
            </tr>
        <?php } } } ?>

                    <!-- ///////////////////// tech Post ////////////////////////// -->
         <?php
            if(isset($_GET['tech_insert']))
            {
                include("tech_insert_page.php");
            }        
        ?>

       <?php if(isset($_GET['tech_view'])) { ?> 
       <table width="1000" border="3" align="center">
			<tr>
				<td  colspan="9" bgcolor="white" align="center">
					<h2>View Tech post</h2>
				</td>
			</tr>
			<tr align="center">
				<th>Tech no</th>
				<th>Tech title</th>
                <th>Tech date</th>	
                <th>Tech Author</th>	
                <th>Author's Link</th>	
                <th>Tech Image</th>
                <th>Tech Content</th>	
                <th>Edit</th>	
                <th>Delete</th>	
            </tr>
            <?php
            include("includes/data.php");
            $i=1;
            if(isset($_GET['tech_view']))
            {
                $query = "Select * from tech_posts order by 1 DESC"; 
				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$id = $row['id'];
					$title = $row['tech_title'];
                    $date = $row['tech_date'];
                    $author = $row['tech_author'];
                    $socail_link = substr($row['tech_socail_link'],0,10);
                    $image = $row['tech_image'];
                    $content = substr($row['tech_content'],0,50);
            
        ?>
            <tr align="center">
                <td><?php echo $i++;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $date;?></td>
                <td><?php echo $author;?></td>
                <td><?php echo $socail_link;?></td>
                <td><img src="../images/<?php echo $image; ?>" width="85" height="50"></td>
                <td><?php echo $content;?></td>
                <td><a href="tech_edit_page.php?tech_edit=<?php echo $id; ?>"><font color="white">Edit</font></a></td>
                <td><a href="tech_delete_page.php?tech_del=<?php echo $id; ?>"><font color="white">Delete</font></a></td>
            </tr>
        <?php } } } ?>

                    <!-- //////////////////////////// business post //////////////////////////// -->
        <?php
            if(isset($_GET['business_insert']))
            {
                include("business_insert_page.php");
            }        
        ?>

       <?php if(isset($_GET['business_view'])) { ?> 
       <table width="1000" border="3" align="center">
			<tr>
				<td  colspan="9" bgcolor="white" align="center">
					<h2>View All business post</h2>
				</td>
			</tr>
			<tr align="center">
				<th>Business no</th>
				<th>Business title</th>
                <th>Business date</th>	
                <th>Business Author</th>	
                <th>Author's Link</th>	
                <th>Business Image</th>	
                <th>Business Content</th>	
                <th>Edit</th>	
                <th>Delete</th>	
            </tr>
            <?php
            include("includes/data.php");
            $i=1;
            if(isset($_GET['business_view']))
            {
                $query = "Select * from business_posts order by 1 DESC"; 
				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$id = $row['id'];
					$title = $row['business_title'];
                    $date = $row['business_date'];
                    $author = $row['business_author'];
                    $socail_link = substr($row['business_socail_link'],0,10);
                    $image = $row['business_image'];
                    $content = substr($row['business_content'],0,50);
            
        ?>
            <tr align="center">
                <td><?php echo $i++;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $date;?></td>
                <td><?php echo $author;?></td>
                <td><?php echo $socail_link;?></td>
                <td><img src="../images/<?php echo $image; ?>" width="85" height="50"></td>
                <td><?php echo $content;?></td>
                <td><a href="business_edit_page.php?business_edit_page=<?php echo $id; ?>"><font color="white">Edit</font></a></td>
                <td><a href="business_delete_page.php?business_del_page=<?php echo $id; ?>"><font color="white">Delete</font></a></td>
            </tr>
        <?php } } } ?>

                    <!-- //////////////////////////// Sport post //////////////////////////// -->
                    <?php
            if(isset($_GET['sport_insert']))
            {
                include("sport_insert_page.php");
            }        
        ?>

       <?php if(isset($_GET['sport_view'])) { ?> 
       <table width="1000" border="3" align="center">
			<tr>
				<td  colspan="9" bgcolor="white" align="center">
					<h2>View All Sport post</h2>
				</td>
			</tr>
			<tr align="center">
				<th>Sport no</th>
				<th>Sport title</th>
                <th>Sport date</th>	
                <th>Sport Author</th>	
                <th>Author's Link</th>	
                <th>Sport Image</th>	
                <th>Sport Content</th>	
                <th>Edit</th>	
                <th>Delete</th>	
            </tr>
            <?php
            include("includes/data.php");
            $i=1;
            if(isset($_GET['sport_view']))
            {
                $query = "Select * from sport_posts order by 1 DESC"; 
				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$id = $row['id'];
					$title = $row['sport_title'];
                    $date = $row['sport_date'];
                    $author = $row['sport_author'];
                    $socail_link = substr($row['sport_socail_link'],0,10);
                    $image = $row['sport_image'];
                    $content = substr($row['sport_content'],0,50);
            
        ?>
            <tr align="center">
                <td><?php echo $i++;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $date;?></td>
                <td><?php echo $author;?></td>
                <td><?php echo $socail_link;?></td>
                <td><img src="../images/<?php echo $image; ?>" width="85" height="50"></td>
                <td><?php echo $content;?></td>
                <td><a href="sport_edit_page.php?sport_edit_page=<?php echo $id; ?>"><font color="white">Edit</font></a></td>
                <td><a href="sport_delete_page.php?sport_del_page=<?php echo $id; ?>"><font color="white">Delete</font></a></td>
            </tr>
        <?php } } } ?>

                  <!-- //////////////////////////// entertainment post //////////////////////////// -->
                  <?php
            if(isset($_GET['entertainment_insert']))
            {
                include("entertainment_insert_page.php");
            }        
        ?>

       <?php if(isset($_GET['entertainment_view'])) { ?> 
       <table width="1000" border="3" align="center">
			<tr>
				<td  colspan="9" bgcolor="white" align="center">
					<h2>View All Entertainment post</h2>
				</td>
			</tr>
			<tr align="center">
				<th>Entertainment no</th>
				<th>Entertainment title</th>
                <th>Entertainment date</th>	
                <th>Entertainment Author</th>	
                <th>Author's Link</th>	
                <th>Entertainment Image</th>	
                <th>Entertainment Content</th>	
                <th>Edit</th>	
                <th>Delete</th>	
            </tr>
            <?php
            include("includes/data.php");
            $i=1;
            if(isset($_GET['entertainment_view']))
            {
                $query = "Select * from bollywood_posts order by 1 DESC"; 
				$run = mysql_query($query);
				while( $row = mysql_fetch_array($run))
				{
					$id = $row['id'];
					$title = $row['entertainment_title'];
                    $date = $row['entertainment_date'];
                    $author = $row['entertainment_author'];
                    $socail_link = substr($row['entertainment_socail_link'],0,10);
                    $image = $row['entertainment_image'];
                    $content = substr($row['entertainment_content'],0,50);
            
        ?>
            <tr align="center">
                <td><?php echo $i++;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $date;?></td>
                <td><?php echo $author;?></td>
                <td><?php echo $socail_link;?></td>
                <td><img src="../images/<?php echo $image; ?>" width="85" height="50"></td>
                <td><?php echo $content;?></td>
                <td><a href="entertainment_edit_page.php?entertainment_edit_page=<?php echo $id; ?>"><font color="white">Edit</font></a></td>
                <td><a href="entertainment_delete_page.php?entertainment_delete_page=<?php echo $id; ?>"><font color="white">Delete</font></a></td>
            </tr>
        <?php } } } ?>
        </table>
    </body>
</html>
<?php }?>