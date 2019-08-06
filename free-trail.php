<?php

$recipient_email    = "rahulsharma1997@programmer.net"; //recepient
$from_email         = $_POST['sender_email']; //from email using site domain.

if($_POST){
	
    //php validation, exit outputting json string
    if(empty($_POST["sender_name"])){
        print 'Name is too short or empty!';
        exit;
    }
    if(!filter_var($_POST["sender_email"], FILTER_VALIDATE_EMAIL)){ //email validation
        print 'Please enter a valid email!';
        exit;
    }
    if(empty($_POST["sender_website"])){
        print 'Please Enter website url.!';
        exit;
    }
    if(empty($_POST["phone"])){ //check for valid numbers in phone number field
        print 'Enter only digits in phone number';
        exit;
    }
    if(empty($_POST["companyname"])){ //check for valid numbers in phone number field
        print 'Please enter your company name';
        exit;
    }
    
    if(empty($_POST["contry"])){ //check for valid numbers in phone number field
        print 'Please enter your contry';
        exit;
    }
    
    if(empty($_POST["subject"])){ //check emtpy subject
        print 'Subject is required';
        exit;
    }
    if(empty($_POST["message"])){ //check emtpy message
        print 'Too short message! Please enter something.';
        exit;
    }

    $sender_name    = filter_var($_POST["sender_name"], FILTER_SANITIZE_STRING); //capture sender name
    $sender_email   = filter_var($_POST["sender_email"], FILTER_SANITIZE_STRING); //capture sender email
    $sender_website   = filter_var($_POST["sender_website"], FILTER_SANITIZE_STRING); //capture sender email
    $companyname   = filter_var($_POST["companyname"], FILTER_SANITIZE_STRING); //capture sender email
    $contry   = filter_var($_POST["contry"], FILTER_SANITIZE_STRING); //capture sender email
    $Turnaround   = $_POST["Turnaround"]; //capture sender email
    $Format   = $_POST["Format"]; //capture sender email
    $HowmanyImages   = $_POST["HowmanyImages"]; //capture sender email
    $Howoftendoyouedit   = $_POST["Howoftendoyouedit"]; //capture sender email
    $Whatisthemain   = $_POST["Whatisthemain"]; //capture sender email
    $Whatisyour   = $_POST["Whatisyour"];
    $BackgroundRemoval   = $_POST["Background-Removal"]; //capture sender email
    $Clippingpath   = $_POST["Clipping-path"]; //capture sender email
    $Retouching   = $_POST["Retouching"]; //capture sender email
    $GhostManniquin   = $_POST["Ghost-Manniquin"]; //capture sender email
    $ColorEnhancement   = $_POST["Color-Enhancement"]; //capture sender email
    $Masking   = $_POST["Masking"]; //capture sender email
    $Shadowreflection   = $_POST["Shadow-reflection"]; //capture sender email
    $phone_number   = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $message        = filter_var($_POST["message"], FILTER_SANITIZE_STRING); //capture message

    $attachments = $_FILES['my_files'];

    $file_count = count($attachments['name']); //count total files attached
    $boundary = md5("sanwebe.com"); 
    
    //construct a message body to be sent to recipient
    $message_body = "

   
   
   
   
   
   <table width='100%' cellspacing='0' cellpadding='0' bgcolor='' style='font-family: arial; font-size: 14px; color: #737373; ' >
<tr>

<td height='40' colspan='2' align='center' valign='middle' bgcolor='#E6E6E6' style='color:#000; border:1px solid #e5e5e5; font-size:14px; font-weight:bold; text-align: center;'><strong>Free trail Details</strong></td></tr><tr ><td width='50%' align='right' valign='middle' class='lable' style=' padding:10px; background-color: #fff; border-right: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; border-left: 1px solid #e5e5e5;  '>Name:</td>
    <td width='50%'  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #fff;  '>$sender_name</td>
  </tr>
  <tr>
    <td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Email :</td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$sender_email</td>
  </tr>
  <tr>
    <td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Website:</td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$sender_website</td>
  </tr>
  <tr>
     <td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Telephone :</td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$phone_number</td>
  </tr>
  <tr>
<td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Company Name :</td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$companyname</td>
  </tr>
  <tr>
<td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Country:</td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$contry</td>
  </tr>
  <tr>
<td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Turnaround time:</td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$Turnaround</td>
  </tr>
  <tr>
<td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Format:</td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$Format</td>
  </tr>

  <tr>
<td align='right' valign='middle' class='lable' style='padding:10px;border-left: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;  '>Services Required: </td>
    <td  align='left' valign='middle' style='padding:10px; border-right:1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; background-color: #f6f6f6; '>$BackgroundRemoval, $Clippingpath,  $Retouching,   $GhostManniquin,  $ColorEnhancement,  $Masking,  $Shadowreflection </td>
  </tr>
  
  <tr>
    <td align='right' valign='middle' class='lable' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-left: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;'>Editable Image</td>
    <td  align='left' valign='middle' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-right:1px solid #e5e5e5; background-color: #f6f6f6; ' >$HowmanyImages</td>
  </tr>

 <tr>
    <td align='right' valign='middle' class='lable' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-left: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;'>Editable Product Images :</td>
    <td  align='left' valign='middle' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-right:1px solid #e5e5e5; background-color: #f6f6f6; ' >$Howoftendoyouedit</td>
  </tr>

<tr>
    <td align='right' valign='middle' class='lable' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-left: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;'>Product Category:</td>
    <td  align='left' valign='middle' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-right:1px solid #e5e5e5; background-color: #f6f6f6; ' >$Whatisthemain</td>
  </tr>

<tr>
    <td align='right' valign='middle' class='lable' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-left: 1px solid #e5e5e5; background-color: #f6f6f6; border-right: 1px solid #e5e5e5;'>Main Challenge:</td>
    <td  align='left' valign='middle' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-right:1px solid #e5e5e5; background-color: #f6f6f6; ' >$Whatisyour</td>
  </tr>

 <tr>
    <td align='right' valign='middle' class='lable' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-left: 1px solid #e5e5e5; background-color: #fff;  border-right: 1px solid #e5e5e5;'>Message:</td>
    <td  align='left' valign='middle' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-right:1px solid #e5e5e5; background-color: #fff; '>$message</td>
  </tr>

<tr>
    <td align='right' valign='middle' class='lable' style='border-bottom: 1px solid #e5e5e5; padding:10px; border-left: 1px solid #e5e5e5; background-color: #fff;  border-right: 1px solid #e5e5e5;'>URL:</td>
    <td  align='left' valign='middle' style='padding:10px; border-bottom: 1px solid #e5e5e5; border-right:1px solid #e5e5e5; background-color: #fff; '>[_post_url]</td>
  </tr>
</table>";
    
    if($file_count > 0){ //if attachment exists
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$sender_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
        
        //message text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message_body));

        //attachments
        for ($x = 0; $x < $file_count; $x++){
            if(!empty($attachments['name'][$x])){

                if($attachments['error'][$x]>0) //exit script and output error if we encounter any
                {
                    $mymsg = array( 
                    1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
                    2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
                    3=>"The uploaded file was only partially uploaded", 
                    4=>"No file was uploaded",
                    6=>"Missing a temporary folder" );
                    print  $mymsg[$attachments['error'][$x]]; 
                    exit;
                }
                
                //get file info
                $file_name = $attachments['name'][$x];
                $file_size = $attachments['size'][$x];
                $file_type = $attachments['type'][$x];
                
                //read file 
                $handle = fopen($attachments['tmp_name'][$x], "r");
                $content = fread($handle, $file_size);
                fclose($handle);
                $encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)

                $body .= "--$boundary\r\n";
                $body .="Content-Type: $file_type; name=".$file_name."\r\n";
                $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
                $body .="Content-Transfer-Encoding: base64\r\n";
                $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
                $body .= $encoded_content; 
            }
        }

    }else{ //send plain email otherwise
       $headers = "From:".$from_email."\r\n".
        "Reply-To: ".$sender_email. "\n" .
        "X-Mailer: PHP/" . phpversion();
        $body = $message_body;
    }
        
    $sentMail = mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {       
        print 'Thank you for your email';
        exit;
    }else{
        print 'Could not send mail! Please check your PHP mail configuration.';  
        exit;
    }
}

?>