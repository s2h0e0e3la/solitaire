<?php


if (isset($_POST['footer_sec_name']) && isset($_POST['footer_sec_phone'])) {


    $enqnamesec = $_POST['footer_sec_name'];
    $enqmailsec = $_POST['footer_sec_mail'];
    $enqphonesec = $_POST['footer_sec_phone'];
    $enqlistsec = $_POST['footer_sec_list'];
  
    
    $to = 'nandisheela@gmail.com'; 
    // Admin's email address
  $headers = 'From: nandisheela@gmail.com' . "\r\n" .
        // 'Bcc: mumbaiwebdesigner@gmail.com' . "\r\n" .
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
 
 
  $subject = 'Shreeji solitaire 2BHK enquiry details';
//   $body = "Name: ".$submittedName."\nEmail: ".$submittedEmail."\nQuery: ".$submittedquery;
$message = "
            <div>
            <span>Name :$enqnamesec</span><br>
            <span>E-Mail :$enqmailsec</span><br>
            <span>Mobile :$enqphonesec</span><br>
            <span>Interested in :$enqlistsec</span><br>
            </div>
";

    // Perform additional validation if needed for name and email fields

 
        // echo "success!!";
        if (mail($to,$subject,$message,$headers))
         {
        echo "successsec!!!";
       }
        else
         {
        echo "fail!!!";
       }
       
    
}

?>