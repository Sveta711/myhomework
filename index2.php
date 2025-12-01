<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
<h2>PHP Form Validation Example</h2>

<form method="post" action="save.php" enctype="multipart/form-data">  
    <fieldset>
  Name: <input type="text" name="name">
  <br><br>
  Lastname: <input type="text" name="lname">
  <br><br>
  Username: <input type="text" name="username"> 
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Password: <input type="password" name="password">
  <br><br>
  Validation of password <input type="password" name="valid">
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  tell: <input type="tel" name="tel">
  <br><br>
  BirthDate: <input type="date" name="dob">
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</fieldset> 
</form>

<?php
session_start();
if(isset($_SESSION['errors'])&& !empty($_SESSION['errors'])){
  foreach($_SESSION['errors'] as $error){
    echo "<p style='color:red;'>{$error}</p>";}
}
elseif(isset($_SESSION['success'])){
  echo "<p style='color:green;'>{$_SESSION['success']}</p>";
}


 ?>
 </body>
 <html>
