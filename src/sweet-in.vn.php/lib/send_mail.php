<?php

$name = !empty($_POST['name']) ? stripslashes(trim($_POST['name'])) : '';
$email = !empty($_POST['email']) ? stripslashes(trim($_POST['email'])) : '';
$message = !empty($_POST['message']) ? stripslashes(trim($_POST['message'])) : '';

if(isset($_POST['submit']) && !empty($_POST['submit'])){
  //recaptcha test
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

    //get recaptcha verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretkey.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    //recaptcha success
    if($responseData->success) {

      //Header injection check
      $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';
      if (preg_match($pattern, $name) || preg_match($pattern, $email))
        die("Header injection detected");

      //Sanitize subject
      $subject = str_ireplace(array("\r", "\n", "%0a", "%0d"), '', stripslashes('Message from '.$name));

      // Validate e-mail
      $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

      if($emailIsValid){

        $subject_prefix = (isset($subject_prefix) && (strlen(trim($subject_prefix))>0)) ? $subject_prefix.' - ' : '';

        $content = $lang_translate['From'].': '.$email."\r\n";
        $content .= $lang_translate['Name'].': '.$name."\r\n";
        $content .= $lang_translate['Message'].": \r\n\r\n";
        $content .= $message;
        $content .= "\r\n\r\nSent from: " . $_SERVER['HTTP_HOST'];

        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, [
            CURLOPT_USERPWD => 'api:' . $_ENV['MAILGUN_KEY'],
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://api.mailgun.net/v3/mg.sweet-in.vn/messages',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => [
                'from' => '<mailgun@mg.sweet-in.vn>',
                'to' => $_ENV['CONTACT_TO'],
                'subject' => $subject,
                'text' => $content,
            ]
        ]);
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        //Success actions
        $succMsg = $lang_translate['success_msg'];
        //Hide contact form after success
        echo '<style>#contact-form {display:none;visibility:hidden;opacity:0;}</style>';
        echo "<!-- {$resp} -->";
      }
      else
        //Error actions
        $errMsg = $lang_translate['error_msg'];
    }
    else
      //recaptcha error
      $errMsg = $lang_translate['recaptcha_error_msg'];
  }
  else
    //recaptcha solve prompt
    $errMsg = $lang_translate['recaptcha_prompt'];
}
else {
  $errMsg = '';
  $succMsg = '';
}
