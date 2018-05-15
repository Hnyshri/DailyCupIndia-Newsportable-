<?php
session_start();
if(!isset($_SESSION['user_name']))
{
    header("location:login.php");
}
else{
?>
<html>
    <body>
        <form action='' method='post' enctype="multipart/form-data">
	    <table border='5' align='center' width="500">
		<tr>
			<td bgcolor="pink" align="center" colspan="5" bgcolor="red"><h2>insert the menu here</h2></td>
		</tr>
		<tr>
			<th>Post title:</th>
			<td><input type='text' name='title' size="30"></td>
        </tr>
        
		<tr>
			<th>post author:</th>
			<td><input type='text' name='author' size="30"></td>
        </tr>
         
		<tr>
			<th>Author's Link:</th>
			<td><input type='text' name='socail_link' size="30"></td>
        </tr>
		<tr>
			<th>Post Image:</th>
			<td><input type='file' name='image'></td>
        </tr>
        
		<tr>
			<th>Post Content:</th>
			<td><textarea name='content' cols="35" rows="15" ></textarea></td>
		</tr>
		<tr><td align="center" colspan="6">
			<input type='submit' name='submit' value="Publish Now">
		</tr>
	</table>
    </form>
</body> 
</html>
<?php
     include("includes/data.php");
    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        $date = date('y-m-d');
        $author = $_POST['author'];
        $socail_link = $_POST['socail_link'];
        $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];
        $image_temp = $_FILES['image']['tmp_name'];
        $content = $_POST['content'];

            // if($title=='' or $author==''  or $socail_link==''  or $content=='' or $image_name=='')
            // {
            //     echo "<script>alert('Any field is empty. Please re-write!')</script>";
            //     exit();
            // }
            if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif")
            {
                if($image_size<=500000)
                {
                    move_uploaded_file($image_temp,"../images/$image_name");
                }
                else
                {
                    echo "<script>alert('image is larger, only 50kb size allowed')</script>";
                }
            }
            else
            {
                echo "<script>alert('image type is invalid')</script>";
            }
        $query = " insert into bollywood_posts(entertainment_title,entertainment_date,entertainment_author,entertainment_socail_link,entertainment_image,entertainment_content) values('$title','$date','$author','$socail_link','$image_name','$content')";
        if (mysql_query($query)) 
        {
            
            echo "<script>window.open('index.php?entertainment_published=Entertainment Post has been published','_self')</script>";
        } 
    }
?>
<?php } ?>