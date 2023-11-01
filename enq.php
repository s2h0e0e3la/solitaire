<?php


if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['list'])) {


    $Name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $list = $_POST['list'];
  
    
    $to = 'nandisheela@gmail.com'; 
    // Admin's email address
  $headers = 'From: nandisheela@gmail.com' . "\r\n" .
        // 'Bcc: mumbaiwebdesigner@gmail.com' . "\r\n" .
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
 
  $subject = 'Shreeji Solitaire Enquiry details';
//   $body = "Name: ".$submittedName."\nEmail: ".$submittedEmail."\nQuery: ".$submittedquery;
$message = "
            <div>
            <span>Name : $Name</span><br>
            <span>E-Mail : $mail</span><br>
            <span>Mobile no : $phone</span><br>
            <span>Interested in  : $list</span><br>
            </div>
";

    // Perform additional validation if needed for name and email fields

 
        // echo "success!!";
        if (mail($to,$subject,$message,$headers))
         {
        echo 'success!!';
       }
        else
         {
        echo 'fail!!';
       }
       
    
}

?>