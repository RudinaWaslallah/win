<?php
$firstName =   $_POST['firstName'];
$lastName =     $_POST['lastName'];
$email =        $_POST['email'];

$errors=[
  'firstNameError'=>'',
  'lastNameError'=>'',
  'emailError'=>'',
];
if(isset($_POST['Submit'])) {

  $firstName=   mysqli_real_escape_string($conn, $_POST['firstName']);
  $lastName=    mysqli_real_escape_string($conn, $_POST['lastName']);
  $email=       mysqli_real_escape_string($conn, $_POST['email']);

  $sql ="INSERT INTO users(firstName, lastName, email) 
         VALUES('$firstName', '$lastName','$email')";
  
  if(empty($firstName)){
    $errors['firstNameError']='please enter first Name';
  }elseif(empty($lastName)){
    $errors['lastNameError']='please enter Last Name';
  }elseif(empty($email)){
    $errors['EmailError']='please enter Email';
  }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['emailError']='please enter valid email';
  }else{
    if(mysqli_query($conn,$sql)){
        header('Location: index.php');
    }else{
      echo'Error: ' . mysqli_error($conn);
    }
  
  }

}