<?php


if (isset($_POST['footer_th_name']) && isset($_POST['footer_th_phone'])) {


    $enqnameth = $_POST['footer_th_name'];
    $enqmailth = $_POST['footer_th_mail'];
    $enqphoneth = $_POST['footer_th_phone'];
    $enqlistth = $_POST['footer_th_list'];
  
     
    $to = 'nandisheela@gmail.com'; 
    // Admin's email address
  $headers = 'From: nandisheela@gmail.com' . "\r\n" .        // 'Bcc: mumbaiwebdesigner@gmail.com' . "\r\n" .
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
 
 
  $subject = 'Shreeji solitaire 3BHK enquiry details';
//   $body = "Name: ".$submittedName."\nEmail: ".$submittedEmail."\nQuery: ".$submittedquery;
$message = "
            <div>
            <span>Name :$enqnameth</span><br>
            <span>E-Mail :$enqmailth</span><br>
            <span>Mobile :$enqphoneth</span><br>
            <span>Interested in :$enqlistth</span><br>
            </div>
";

    // Perform additional validation if needed for name and email fields

 
        // echo "success!!";
        if (mail($to,$subject,$message,$headers))
         {
        echo "successth!!!";
       }
        else
         {
        echo "fail!!!";
       }
       
    
}

?>