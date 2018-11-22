

<?php
$Error_Login="";
if (isset($_POST['submit'])){
/* These are our valid username and passwords */
$user = 'gihan.kumara@varunlanka.com';
$pass = '1234';

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {    
        
        if (isset($_POST['rememberme'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/account', 'www.vbl.com');
            setcookie('password', md5($_POST['password']), time()+60*60*24*365, '/account', 'www.vbl.com');
        
        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $_POST['username'], false, '/account', 'www.vbl.com');
            setcookie('password', md5($_POST['password']), false, '/account', 'www.vbl.com');
        }
        header('Location: ../imports/db_kpi.php');
        
    } else {
        $Error_Login= 'Username/Password Invalid';
    }
    
} else {
    $Error_Login= 'You must supply a username and password.';
}
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Pepsi System Login</title>
	  <link rel="icon" href="../images/pepsi_lab_icon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link href="login.css" rel="stylesheet" />
</head>
<body style="align-self: center;">
	<img src="../images/login.png">
<div class="login" align="center">
<form align="center"   name="login_form" method="POST" action="">


  
    <label  for="email">Email:</label>
    
      <input type="email" name="username"  id="username" placeholder="Enter email">

    <label  col-sm-2" for="pwd">Password:</label>

      <input type="password"   name="password" id="password" placeholder="Enter password">
<br>
        <label><input type="checkbox" name="rememberme" value="1"> Remember me</label>

      <button type="submit" class="btn btn-default" name="submit" value="Login!">Submit</button>
      <b>
        <p><?php echo $Error_Login; ?></p>
      
    </b>
   
</form>
</div>
</body>
</html>



