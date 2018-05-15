<?php
    error_reporting(E_ALL);
    session_start();    
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
                    }
        }
    </script>
</head>
<body background="p1.png">
    <form action='login.php' method='post'>
        <table width=400 align='left' border='20' style="margin-top:5em; margin-left:5em; ">
        <tr><td colspan='5' align='center' color="white" bgcolor='gray'><font color="white"><h2>Admin Login here</h2></font></td></tr>

         <tr>
         <td align='right'><font color="white">User name</font></td><td><input type='text' placeholder="Enter Username" name='admin_name'></td>
         </tr>
         
         <tr>
         <td align='right'><font color="white">Password</font></td><td><input type='password'id="myInput" placeholder="Enter password" name='admin_pass'><input type="checkbox" onclick="myFunction()"><font color="white">Show</font></td>
         </tr>
         
         <tr><td align="center" colspan="6">
			<input type='submit' name='login' value="Login">
            <input type='submit' name='submit3' value="Signin">
		</tr>
        </table>
    </form>
</body>
</html>
<?php
    include("includes/data.php");
    if(isset($_POST['login']))
    {
        $user_name=mysql_real_escape_string($_POST['admin_name']);
        $user_pass=mysql_real_escape_string($_POST['admin_pass']);
        $encrpt = md5($user_pass);
        $query = "select * from user_login where user_name='$user_name' AND password='$user_pass'";
        $run=mysql_query($query);
        if(mysql_num_rows($run)>0)
        {   
            // $name = "shriyanshgupta123@gmail.com";
            // $content = "Shriyansh gupta";
            // $expire = time() + (3600 * 7);
            // setcookie($name,$content,$expire);
            $_SESSION['user_name']=$user_name; 
            echo "<script>window.open('index.php?logged=you are logged sucessfully','_self')</script>";
        }
        else
        {
            echo "<script>alert('user name and password is wrong')</script>";
        }
    }
?>
<?php 
     include("includes/data.php");
     if(isset($_POST['submit3']))
     {
        echo "<script>window.open('sign_in.php?signn=Please sign up here','_self')</script>";
        
     }
?>