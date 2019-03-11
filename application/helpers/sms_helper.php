<?php
function send_sms($mobile, $message)
 {
	$mb = '91'.$mobile;
	$msg= urlencode($message);
	$d1 = "http://sms.genesissoftech.org/api/mt/SendSMS?user=excelc&password=excel@12&senderid=EXLCLS&channel=Trans&DCS=0&flashsms=0&number=$mb&text=$msg&route=2";
	$ch=curl_init($d1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
 }
?>