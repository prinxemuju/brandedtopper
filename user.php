<?php
$yx=opendir('myToken');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$me=json_decode(xx('https://graph.facebook.com/me?access_token='.$isi.'&fields=id'),true);
if(!$me[id]){
$no[]=1;
unlink('myToken/'.$isi);
}else{
$ok[]=1;
}
}
}
echo count($ok);
function xx($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
)
);
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
?>
