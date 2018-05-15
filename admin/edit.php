<?php
session_start();
if(!isset($_SESSION['user_name']))
{
    header("location:login.php");
}
else{
?><html>
<body>
<?php
    include("index.php");
    include("includes/data.php");
    $edit_id = @$_GET['edit'];
    $query = "select * from posts where id= '$edit_id'";
    $run = mysql_query($query);
    while( $row = mysql_fetch_array($run))
	{
        	$edit_id1 = $row['post_id'];
			$title = $row['post_title'];
            $date = $row['post_date'];
            $author = $row['post_author'];
            $socail_link = $row['post_socail_link'];
            $image = $row['post_image'];
            $content = $row['post_content'];            
?>

    <form action="edit.php?edit_form=<?php echo $edit_id1 ?>" method='post' enctype="multipart/form-data">
	    <table border='5' align='center' width="600">
		<tr>
			<td bgcolor="pink" align="center" colspan="5" bgcolor="red"><h2>Editing Post</h2></td>
		</tr>
		<tr>
			<th>Post title:</th>
			<td><input type='text' name='title' size="30" value="<?php echo $title ?>"></td>
        </tr>
        
		<tr>
			<th>post author:</th>
			<td><input type='text' name='author' size="30" value="<?php echo $author ?>"></td>
        </tr>
        <tr>
			<th>Author's Link:</th>
			<td><input type='text' name='socail_link' size="30" value="<?php echo $socail_link ?>"></td>
        </tr>
        
		<tr>
			<th>Post Image:</th>
            <td><input type='file' name='image'>
                <img src="../images/<?php echo $image; ?>" width="80" height="50">
            </td>
        </tr>
        
		<tr>
			<th>Post Content:</th>
			<td><textarea name='content' cols="30" rows="10" ><?php echo $content ?></textarea></td>
		</tr>
		<tr><td align="center" colspan="6">
			<input type='submit' name='update' value="Update Now">
        </tr>
    <?php } ?>
	</table>
    </form>
    </body>
    </html> 
    <?php 
        if(isset($_POST['update']))
        {
            $update_id = $_GET['edit_form'];
            $post_title = $_POST['title'];
            $post_date = date('y-m-d');
            $post_author = $_POST['author'];
            $post_socail_link = $_POST['socail_link'];
            $post_image = $_FILES['image']['name'];
            $post_image_type = $_FILES['image']['type'];
            $post_image_size = $_FILES['image']['size'];
            $post_image_temp = $_FILES['image']['tmp_name'];
            $post_content = $_POST['content'];

            move_uploaded_file($post_image_temp,"../images/$post_image");

            $update_query = " update posts set post_title='$post_title',post_date='$post_date',post_author='$post_author',post_socail_link='$post_socail_link',post_image='$post_image',post_content='$post_content' 
                        where id ='$update_id'";
            if (mysql_query($update_query)) 
            {
                echo "<script>alert('Post has been updated')</script>";
                echo "<script>window.open('index.php?post=Post has been updated...','_self')</script>";
            } 

        }
    ?>
    <?php } ?>