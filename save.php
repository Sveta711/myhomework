<?php
   session_start();
   var_dump($_FILES);

  if (isset($_POST['name'])&& $_POST['name'] !=''){
    unset($_SESSION['errors']['name_error']);

  }else{
   $_SESSION['name_error']="error" ;}

   
  echo"<br>";

  if (isset($_POST['lname'])&& $_POST['lname'] !=''){
    unset($_SESSION['errors']['lname_error']);

  }else{
   $_SESSION['lname_error']="error" ;}

   if (isset($_POST['email'])&& $_POST['email'] !=''){
    unset($_SESSION['errors']['email_error']);

  }else{
   $_SESSION['email_error']="error" ;}

   if (isset($_POST['age'])&& $_POST['age'] >=18){
    echo $_POST['age']."<br>";}
    else{
    $_SESSION['errors']['age_error']="erorr:invalid age";
    }
    if(empty($_SESSION['errors']) || !isset($_SESSION['errors'])){
        $_SESSION['success']="registered!";
    }
/* echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $valid;
echo "<br>";
echo $tel;
echo "<br>";
echo $age;
echo "<br>";
echo $gender;*/


?>