<?php


if (isset($_POST['footer_name']) && isset($_POST['footer_phone'])) {


    $enqname = $_POST['footer_name'];
    $enqmail = $_POST['footer_mail'];
    $enqphone = $_POST['footer_phone'];
    $enqlist = $_POST['footer_list'];
  
   
    $to = 'nandisheela@gmail.com'; 
    // Admin's email address
  $headers = 'From: nandisheela@gmail.com' . "\r\n" .
        // 'Bcc: mumbaiwebdesigner@gmail.com' . "\r\n" .
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
 
 
  $subject = 'Shreeji solitaire 1BHK enquiry details';
//   $body = "Name: ".$submittedName."\nEmail: ".$submittedEmail."\nQuery: ".$submittedquery;
$message = "
            <div>
            <span>Name :$enqname</span><br>
            <span>E-Mail :$enqmail</span><br>
            <span>Mobile :$enqphone</span><br>
            <span>Interested in :$enqlist</span><br>
            </div>
";

    // Perform additional validation if needed for name and email fields

 
        // echo "success!!";
        if (mail($to,$subject,$message,$headers))
         {
        echo "success!!!";
       }
        else
         {
        echo "fail!!!";
       }
       
    
}

?>