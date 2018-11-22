
<?php
$Error_Login="";
if (isset($_POST['submit'])){
/* These are our valid username and passwords */
$user = 'prasath.sinniah@varunlanka.com';
$pass = '1237894560';

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
<html >
<head>
  <link rel="icon" href="../images/pepsi_lab_icon.png">
  <meta charset="UTF-8">
  <title>Pepsi System Login</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <div class="wrapper" width="400px">
    <form class="form-signin" method="POST" action="">    
<img src="../images/login.png">

      <h2 class="form-signin-heading">Please login</h2>

      <input type="text" class="form-control" name="username"  id="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" style="color: white;" class="chk" name="rememberme" value="1"> <b>Remember me<b>
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login!">Submit</button>   
    </form>
       <b>

        <p align="Center"><?php echo $Error_Login; ?></p>
      
    </b>
  </div>
  
  
</body>
</html>
