<?php
   session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name= trim($_POST["name"]);
  $lname=trim($_POST["lname"]);
  $email=trim($_POST["email"]);
  $password=trim($_POST["password"]);
  $valid=trim($_POST["valid"]);
  $username=trim($_POST["username"]);
  $tel=trim($_POST["tel"]);
  $dob=trim($_POST["dob"]);
  $gender=trim($_POST["gender"]);
  $comment=trim($_POST["comment"]);
  var_dump($_FILES);
  $errors=[];
  $required=["name","lname","email","password","valid","username","tel","dob","gender","comment"];
  foreach($required as $fields){
    if (empty($_POST[$fields])){
      $errors[]= "$fields is requireed"; }
  }
  if(!preg_match("/^[a-zA-zԱ-Ֆա-ֆ'-]+$/u",$name)){
    $errors[]="$name can only contain letters";
  }
  if(!preg_match("/^[a-zA-zԱ-Ֆա-ֆ'-]+$/u",$lname)){
    $errors[]="$lname can only contain letters";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid $email format";
    }
    if(!empty($dob)){
      $birthdate=new DateTime($dob);
      $today= new DateTIME();
      $diff= date_diff($birthdate,$today);
      $age=$diff->y;

      if($age<18){
        $errors[]="Age must be 18 or older";
      }
    }
     if(!preg_match("/^\+374\s\d{2}\s\d{3}\s\d{3}$/",$tel)){
        $errors[]="form must be +374 XX XXX XXX";
    }
    if($password!==$valid){
      $errors[]="<h4 style='color:red;'>Passwords do not match</h4>";
    }
echo "<h2>Your Input:</h2>";
echo"name: $name";
echo "<br>";
echo "lastname:$lname";
echo "<br>";
echo "emaill: $email";
echo "<br>";
echo "username:$username";
echo "<br>";
echo "password:$password";
echo "<br>";
echo"validation of password: $valid";
echo "<br>";
echo"tellephone: $tel";
echo "<br>";
echo "age:$age";
echo "<br>";
echo"gender: $gender";
}
 if(!empty($errors)){
  $_SESSION['errors']=$errors;
  header("Location: index2.php");
 }
 if(!empty($errors)){
  echo "<h3 style='color:red'>THERE IS A FALSES IN FORM</h3>";
  echo "<ul>";
  foreach($errors as $err){
    echo "<li>$err</li>"; }
  echo"</ul>";
  exit;
 }
 $data=[
  "NAME"=>$name,
  "LASTNAME"=>$lname,
  "EMAIL"=>$email,
  "USERNAME"=>$username,
  "TELLEPHONE"=>$tel,
  "AGE"=>$age,
  "GENDER"=>$gender,
  "ADDRESS"=>$comment
 ];
 foreach($data as $key=>$value){
  echo "$key=>[$value]<br>";
 }echo"<h3 style='color:green;'>SUCCESS</h3>";


  /*if (isset($_POST['name'])&& $_POST['name'] !=''){
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
    
    }*/



?>