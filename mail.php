<?php
         $to = "rakibzaheen@gmail.com";
         $subject = $_POST["subject"];
         
         $message = $_POST["name"]."\t".$_POST["message"];
         $frommail = $_POST["email"];
         
         $header = "From:".$frommail." \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully from <b>".$frommail."</b> ";
         }else {
            echo "Message could not be sent...";
         }
      ?>