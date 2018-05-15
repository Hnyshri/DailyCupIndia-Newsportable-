<?php 
    include("includes/data.php");
    $delete_id = $_GET['entertainment_delete_page'];
    $delete_query = " delete from bollywood_posts where id = '$delete_id'";

    if (mysql_query($delete_query)) 
            {
                echo "<script>alert('An Entertainment Post has been deleted')</script>";
                echo "<script>window.open('index.php?entertainment_deleted=An Entertainment post has been deleted...','_self')</script>";
            } 

?>