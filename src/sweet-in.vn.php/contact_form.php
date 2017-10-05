<?php

//===Editable variables===//

//Cotact form identifier, prefixes email subject
//delete this variable if you don't want to use it
$subject_prefix = '';

//Keys from Google reCaptcha https://www.google.com/recaptcha/admin
$sitekey = '6LcwQTMUAAAAAFmWIDBX9bXw2yMKmjeIgY2ToOqa';
$secretkey = $_ENV['CAPTCHA_SECRET'];

//===Editable variables END===//

$base_dir  = __DIR__;
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir);

include_once('lang/'.$lang_code.'.php');
require_once('lib/send_mail.php');

?>

<link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>/css/style.css">

<div class="contact-form wrapper">

<div id="response-message">
  <?php if(!empty($errMsg)): ?><div class="error"><?php echo $errMsg; ?></div><?php endif; ?>
  <?php if(!empty($succMsg)): ?><div class="success"><?php echo $succMsg; ?></div><?php endif; ?>
</div>

<form action="#response-message" method="POST" id="contact-form" name="contact_form" class="contact">

  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
      <label class="required input-line">
        <span><?php echo $lang_translate['Name'] ?></span>
        <input type="text" value="<?php echo !empty($name) ? $name : ''; ?>" placeholder="<?php echo $lang_translate['Name'] ?>" maxlength="80" name="name" required="required">
      </label>

      <label class="required input-line">
        <span><?php echo $lang_translate['Email'] ?> </span>
        <input type="email" value="<?php echo !empty($email)?$email:''; ?>" placeholder="<?php echo $lang_translate['Email'] ?>" maxlength="80" name="email" required="required">
      </label>

      <label>
        <span><?php echo $lang_translate['recaptcha_test']; ?></span>
        <div class="g-recaptcha" data-sitekey="<?php echo $sitekey ?>"></div>
      </label>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
      <label class="required input-line">
        <span><?php echo $lang_translate['Message'] ?></span>
        <textarea type="text" placeholder="<?php echo $lang_translate['Message'] ?>" name="message" rows="7" required="required"><?php echo !empty($message)?$message:''; ?></textarea>
      </label>

    </div>
  </div>
  <div class="row">
    <div class="col-12 submit-wrapper">
      <input type="submit" name="submit" class="submit" value="<?php echo $lang_translate['Submit']; ?>">
    </div>
  </div>

</form>
</div>

<script src="<?php echo $base_url;?>/vendor/validatejs/validate.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang_code; ?>"></script>
<script type="text/javascript">
//validate.js validation rules
//see http://rickharrison.github.io/validate.js/
  var validator = new FormValidator('contact_form', [{
  name: 'name',
    display: "<?php $lang_translate['Name'] ?>",
    rules: 'required'
  }, {
  name: 'email',
    display: "<?php $lang_translate['Email'] ?>",
    rules: 'required|valid_email'
  }, {
  name: 'message',
    display: "<?php $lang_translate['Message'] ?>",
    rules: 'required'
  }],
  function(errors, evt) {
    if (errors.length > 0) {
      var errorString = '';
      for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
        errorString += errors[i].message + '<br />';
      }
      if (evt && evt.preventDefault) {
        evt.preventDefault();
      } else if (event) {
        event.returnValue = false;
      }
      document.getElementById("response-message").innerHTML = '<div class="error">'+errorString+'</div>';
      console.dir(errors);
    }
  });
</script>
