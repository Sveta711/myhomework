<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php $nameErr =$lnameErr=$emailErr =$telErr=$validErr=$dateErr=$usernameErr=$passwordErr= $genderErr = $websiteErr = "";
         $name = $lname= $email=$password=$username =$tel= $gender =$valid=$date= $comment = $website = "";
         $error=[];
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
         $nameErr = "Name is required";
      } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["lname"])) {
         $lnameErr = "last name is required";
      } else {
    $lname = test_input($_POST["lname"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }}
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
    
  if (empty($_POST["valid"])) {
    $validErr = "";
  } else {
    $valid = test_input($_POST["valid"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if(empty ($_POST["username"])){
    $usernameErr = "";
  }else{
    $username= test_input($_POST["username"]);
  }
  if (empty($_POST["tel"])) {
    $telErr= "tell is requered";
  } else {
    $tel = test_input($_POST["tel"]);
    if(!preg_match("/^\+374\s\d{2}\s\d{3}$/",$tel)){
        $errors['tel']="ֆորմատը պետք է լինի  +374 00 00 00";
    }
  }
  if (empty($_POST["dob"])) {
    $dateErr= "DAY of birthday is requered";
  } else {
    $dob = test_input($_POST["dob"]);
    $birthdate=new DateTIME($dob);
    $today=new DateTime();
    $age=$today->diff($birthdate)->y;
    if($age<18){
        $doberr="YOU ARE NOT ADULT";
        echo $doberr;
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="save.php" enctype="multipart/form-data">  
    <fieldset>
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Lastname: <input type="text" name="lname">
  <span class="error"> *<?php echo $lnameErr;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="error"> * <?php echo $usernameErr;?></span>
  <br><br>
  
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Validation of password <input type="password" name="valid">
  <span class="error"><?php echo $validErr;?></span>
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  tell: <input type="tel" name="tel">
  <span class="error">* <?php echo $telErr;?></span>
  <br><br>
  Date: <input type="date" name="dob">
  <span class="error">* <?php echo $dateErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
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
