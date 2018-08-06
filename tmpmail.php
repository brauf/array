<?php

function is_temp_mail($mail)
{
    $blacklisted_mail_domains = file('https://gist.githubusercontent.com/hassanazimi/d6e49469258d7d06f9f4/raw/disposable_email_addresses');
    foreach($blacklisted_mail_domains as $blck_mail) {
        [, $mail_domain] = explode('@', $mail);
        if(strcasecmp($mail_domain, trim($blck_mail)) == 0) {
            print "true";
			return true;
        }
    }
	print "false";
    return false;
}

$mail = "dddd@10minutesmail.com";
is_temp_mail($mail);


?>