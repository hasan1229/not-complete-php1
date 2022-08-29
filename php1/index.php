<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Contact Us Form In Php</title>
    <style>

.contact button{
  width: 150px;
}

.contact-links{
  position: relative;
}


.col-4 {width: 33.33%;}


.contact{
  text-align: center;
}

.contact input, textarea{
  width: 100%;
  padding: 10px;
  font-size: 1rem;
  text-align: center;
  border: none;
  border-radius: 5px;
  resize: none;
}

.contact button{
  border: none;
  border-radius: 12px;
  background-color: #052d2f;
  color: white;
  cursor: pointer;
  padding: 15px;
  margin: 10px;
  width: 100px;
}
.contact button:hover{
  background-color: gray;
}

.contact-links{
  text-align: center;
}

.

    </style>
</head>
<body>

<div class="contact col-4" id="contact-id">

<?php
 if(isset($_POST['submit_form']))
			{ 
          $name=$_POST['name']; 
       $email=$_POST['email']; 
        $msg=$_POST['msg']; 
       $phone=$_POST['phone']; 
       $FromName="Techno Smarter";
$FromEmail="info@yourdomain.com";
$ReplyTo=$email;
$toemail="rabialhasan.1229@gmail.com";
$subject="Rabial Hasan Contact form"; 
$message='Name:-'.$name.'<br>Email :-' .$email.'<br> Phone No:-'.$phone.'<br> Message:-'.$msg;
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: ".$FromName." <".$FromEmail.">\n";
$headers .= "Reply-To: ".$ReplyTo."\n";
$headers .= "X-Sender: <".$FromEmail.">\n";
$headers .= "X-Mailer: PHP\n";
$headers .= "X-Priority: 1\n";
$headers .= "Return-Path: <".$FromEmail.">\n";
   if(mail($toemail, $subject, $message, $headers,'-f'.$FromEmail) ){
          $hide=1;
        
         echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>'.$name.',</strong> Your message has been sent. We will reply soon as possible. </div> '; 
	      
	} else {
		echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
} 

			}
		
		?> 



        <h2>CONTACT ME</h2>
        <hr class="dotted-hr">

        <form action="mailto:rabialhasan.1229@gmail.com@gmail.com" method="POST" enctype="text/plain">
            <p><input type="text" placeholder="Your Name" name="name"class="cform" required></p>
            <p><input type="email" placeholder="Your Email" class="cform" name="name" required></p>
            <textarea cols="10" rows="5" class="cform" name="msg" required></textarea>
            <button type="submit" class="btn_primary" name="submit_form" required>SEND</button>
            <button type="reset">RESET</button>
        </form>
    </div>

</div>
</body>
</html>