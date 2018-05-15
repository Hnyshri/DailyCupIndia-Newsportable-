<div id="top"> 
    <form action='' method='post'>
        <table width=126 align='right' border='0' style="margin-top:5px; margin-left:5em; ">
         <tr><td><input type='submit' name='submit' value="Login">
            <input type='submit' name='submit1' value="Signin">
        </td></tr>
        </table>
    </form>
</div>
<?php
    include("includes/data.php");
    if(isset($_POST['submit']))
    {
        echo "<script>window.open('includes/login.php?signn=Please sign up here','_self')</script>";  
    }
?>
<?php 
     include("includes/data.php");
     if(isset($_POST['submit1']))
     {
        echo "<script>window.open('includes/sign_in.php?signn=Please sign up here','_self')</script>";
        
     }
?>

