<?php

  // $name = $_POST['name'];
  //
  // $visitor_email = $_POST['email'];
  //
  // $message = $_POST['nachricht'];
  //
  //
  //
  //
  //
  // $email_subject = "Neuer Form Eintrag";
  // $email_subject .=  $_POST['betreff'];
  //
  //
  //
  // $email_body = "Name: $name.\n".
  //
  //                             "Here is the message:\n $message".
  //
  // //
  // // $headers .= "Reply-To: $visitor_email \r\n";
  //
  // $headers =  'MIME-Version: 1.0' . "\r\n";
  // $headers .= 'From: Your name ' .$visitor_email. "\r\n";
  // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  //
  // $to = "info@GlobalCityGames.de";
  //
  //
  // mail($to,$email_subject,$email_body,$headers);
  //



       // $from =  $_POST['email'];
       // $name = $_POST['name'];
       // $message = $_POST['nachricht'];
       // $betreff = $_POST['betreff'];
       //
       //
       //
       // $message = wordwrap($message, 70);
       // $header = "From:".$from;
       // $to = "info@GlobalCityGames.de";
       // $result = mail($to, $betreff, $message, $header);
       //



?>


<?php
    if(isset($_POST['name']))
    {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $betreff = trim($_POST["betreff"]);
    $nachricht = trim($_POST["nachricht"]);
    $fehler = "";

    // $answerbox = trim($_POST["answerbox"]);
    if(strlen($name)<2) {
      $fehler .= "<br><p>Please type your name.</p>";
    }else if(strlen($betreff)<2) {
      $fehler .= "<br><p>Please type a subject.</p>";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $fehler .= "<br><p>Please type a valid email address.</p>";
    }else if(strlen($nachricht)<10) {
      $fehler .= "<br><p>Please type your message.</p>";
    }else{
                $headers =  'From: '.$email. "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
        mail('info@globalcitygames.com',"GCG-Form: ".$betreff,$nachricht,$headers);
        print "mail succesuffully sent";
    }

}
    ?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body{
      display: flex;
      /* background-color: green; */
    }
      a{
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        font-size: 70px;
      }
    </style>
  </head>
  <body>
      <a href="../index.html">Zurück</a>
      <?php
        // print $fehler;
       ?>
  </body>
</html>
