
<form name="import" method="post" enctype="multipart/form-data">
      <input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
</form>



<?php 




require '../System_Configuration/System_Config.php';

 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




if(isset($_POST["submit"]))
{
 $file = $_FILES['file']['tmp_name'];
 $handle = fopen($file, "r");
 $c = 1;
                   while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                   {
                   $name = $filesop[0];
                   $email = $filesop[1];
                   
                   $sql = "INSERT INTO csv (name, email) VALUES ('$name','$email')";
                   $c = $c + 1;
                   }
 


if (mysqli_query($conn, $sql)) {
  
    echo "Successfully Uploaded";
  
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





}
mysqli_close($conn); 
 ?>

