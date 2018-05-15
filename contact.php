<!DOCTYPE html>
<html lang="en">
        <head><title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="description" content="Hnyshri - Shriyansh Gupta">
        <meta name="keywords" content="Hnyshri,honey, shriyansh, shriyansh gupta, hnyshri, Dailycup,news,newsletter,sport,tech,technology,about, bollywood, 
                    enjoy,business,forms, admit card, education, Contact, Shahjahanpur, Dehradun, dbit, Dbgi , mail ,shahjahanpur 
                    ,php developer, web site, result">
        <meta name="author" content="Shriyansh Gupta">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" media="screen" href="style.css">           
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">	
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="images/shri.png" type="image/png" sizes="20X20">            
        </head>
        <body onload="myclock()">
            <!-- this is top file -->
            <div><?php include("includes/time.php");?></div>                        
            <!-- this is header -->
            <div><?php include("includes/header.php");?></div>
            <div><?php include("includes/menu.php");?></div>
            <div><?php include("includes/sidebar.php");?></div>            
            <iframe  style="margin-left:150px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6883.63756838567!2d77.92879949999998!3d30.384503300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1524297562815" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method='post' enctype="multipart/form-data">
	                <table border='0' align='center' width="600" >
		                <tr>
                         <td  align="center" colspan="5"><h1>Contact Us</h1></td>
                        </tr>
                        <tr>
			                <td><strong>Your Email:</strong></td>
			                <td><input type='text' name='email' size="30"></td>
                        </tr>		             
                        <tr>
			                <td><strong>Subject:</strong></td>
			                <td><input type='text' name='subject' size="30"></td>
                        </tr>
    		            <tr>
			                <td><strong>Your Message:</strong></td>
			                <td><textarea name='message' cols="35" rows="10" ></textarea></td>
                        </tr>                    			
		                <tr><td align="center" colspan="5">
			                <input type='submit' name='send_email' value="Send Email"></td>
		                </tr>
	                </table>
                </form>
            </div>

            <?php               
                if(isset($_POST['send_email']))
                {
                    $sender_email= $_POST['email'];
                    if (filter_var($sender_email, FILTER_VALIDATE_EMAIL)) 
                    {   
                        $sender_subject = $_POST['subject'];
                        $sender_message = $_POST['message'];
                        $to = "shriyanshgupta123@gmail.com";
    
                        $headers  = "MIME-Version: 1.0\r\n";
                        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                        $headers .= "From: <{$sender_email}> \n";
                                             
                        if($sender_email=='' or $sender_subject=='' or $sender_message=='')
                        { 
                            echo "<script>alert('Any field is empty')</script>";
                            exit();
                        }
                        $message = "You have receive an Email From : <br>".$sender_message;
                        mail($to,$sender_subject,$message,$header);                    
                        $to_sender = $_POST['email'];
                        $sub = "www.newseltter.com<br>";
                        $msg = "Thank you for sending an email, we will get to you soon!<br>";
                        $from = "shriyanshgupta123@gmail.com";
    
                        mail($to_sender,$sub,$msg,$from);
    
                        echo "<center><h2>Email send, get to you soon!</h2></center>";                 
                        exit();                        
                    } else {
                        echo "<script>alert('your email id not valid. Please re-write!')</script>";
                        exit();
                    }
                   
                }
            ?>
            <!-- this is footer -->
            <div><?php include("includes/footer.php");?></div>
</div>
</body>
</html>