<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login!</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
	  <div class="title"><h1>Login Here!</h1></div>
      <div class="container">
      <div class="left"></div>
      <div class="right">
      	<div class="formBox">
      	<form action="php/check-login.php" method="post">	     
		    <p>User name</p>
		    <input type="text" 
		           class="form-group" 
		           name="username" 
		           id="username">
		  		<p>Password</p>
		    <input type="password" 
		           name="password" 
		           class="form-group" 
		           id="password">
		           <div class="form-group">
		    <label class="form-label">Select:</label>
		  <select class="form-control mb-3"
		          name="role" 
		          aria-label="Default select example" class="active">
		       <option value="select">Select</option>
			  <option value="teacher">Teacher</option>
			  <option value="principal">Principal</option>
		  </select>
		 
		  <button type="submit" 
		          class="btn btn-success" name="login">LOGIN</button>
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