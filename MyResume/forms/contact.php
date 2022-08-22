<?php



$receiving_email_address = 'danielshobe90@gmail.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}
/**what kind of error is this */
/** holyshit i am not that good in php SHIT */




echo $contact->send();
