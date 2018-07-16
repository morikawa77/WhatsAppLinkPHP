<?php

$phone = ''; 	// Insert yoyr phone number
$text = ''; 	// Insert your initial message


$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
 echo "<a target='_blank' href='https://api.whatsapp.com/send?phone=".$phone."&text=".$text."'>WhatsApp</a>";
}
// all others
else {
 echo "<a target='_blank' href='https://web.whatsapp.com/send?phone=".$phone."&text=".$text."'>WhatsApp</a>";
}
?>