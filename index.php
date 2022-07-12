<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login!</title>
	 <link rel="shortcut icon" href="img/password.png" style="height:20px;">
	<link rel="stylesheet" type="text/css" href="login.css">
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('img/background2.jpg');">
	  <div class="title"><h1 style="color:#67366D;font-size: 45px;margin-top: 24px;text-shadow: 1px 1px black;">Login <span style="color:white;text-shadow: 4px 4px black;"> Here!</span></h1></div>
      <div class="container">
      <div class="left"><img src="img/user06.png" style="margin-left:950px;margin-top: 10px;">
      	<h3 style="color:white;margin-left: 300px;font-family: 'Dancing Script', cursive; margin-top:50px;font-size: 40px;font-weight: 900;text-shadow: 2px 2px black;">There is no Success<br><span style="margin-left: 40px;color: #67366D;font-size: 50px;text-shadow: 2px 2px black;"> Like Failure !</span></h3>
      </div>
      <div class="right">
      	<div class="formBox">
      	<form action="php/check-login.php" method="post">     
		    <p style="font-weight:800;color: #00E99A;">UserName</p>
		    <input type="text" 
		           class="form-group" 
		           name="username" 
		           id="username" required placeholder="Enter username" style="border-bottom: 3px solid #00A9F0;"></input>
		  		<p style="font-weight:800; color: #00E99A;">Password</p>
		    <input type="password" 
		           name="password" 
		           class="form-group" 
		           id="password" required placeholder="Enter Password"  style="border-bottom: 3px solid #00A9F0;"/>
		           <div class="form-group">
		    <label class="form-label" style="color:#00E99A;">Select:</label>
		  <select class="form-control mb-3"
		          name="role" 
		          aria-label="Default select example" class="active"  style="border-bottom: 3px solid #00A9F0;">
		       <option value="select">Select</option>
			  <option value="teacher">Teacher</option>
			  <option value="principal">Principal</option>
		  </select>
		 <div>
		  <button type="submit" 
		          class="btn btn-success" name="login" style="background-color:green;margin-top: 10px;">LOGIN</button>
		          <button type="Close" class="btn btn-primary" style="margin-top: 10px;">Reset</button>
		       </div>
		       	<div onload=display_ct(); style="margin-top:10px;">
<span id='ct' style="margin-top:70px;"></span>
 <div onload=display_ct();>
<span id='ct' ></span>
<script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>
<span id='ct7' style="color: #67366D; font-size: 23px; font-weight: 800; text-shadow:2px 2px #00EE94 ;"></span>     
		</form>
      </div>
      </div>
  </div>
</div>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>