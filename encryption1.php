<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<body>
<center>
<h2>Protect Your Message Using Cryptography To Avoid The Data Loss</h2>

<div class="btn-group btn-group-justified">
  <a href="encryption1.php" class="btn btn-primary">Encryption</a>
  <a href="decryption1.php" class="btn btn-primary">Decryption</a>
  <a href="registration1.php" class="btn btn-primary">Registration</a>
  <a href="myprofile1.php" class="btn btn-primary">My profile</a>
  <a href="logout1.php" class="btn btn-primary">LogOut</a>
</div>

			<div class="container">
  			<h2>Encryption</h2>
 			<form method="GET" action="#">
    		<div class="form-group">
      			<label for="comment">Enter The Text Here:</label>
      			<textarea class="form-control" rows="5" id="comment" name="enc"></textarea>
    		</div>
      			
        		<div class="form-group">
            <label for="comment">Enter The key Here:</label>
            <textarea class="form-control" rows="5" id="comment" name="key"></textarea>
        </div>
        <input type="submit" class="btn btn-info" value="Submit">
                  	   </form>
     </div><br><br>


<?php  
$name=$_GET['enc'];
$a=$_GET['key'];

//$name = array("w", "e", "l", "c","o","m","e"); 

for($i=0;$i<strlen($name);$i++) 
{
  echo chr(ord(substr($name,$i,1))+$a);
  echo chr(substr($name,$i,1));

}
//header("Location: encryption.html");
?>  
    </center>
     </body>
     </html>
	

