<?php
$firstName=    $_POST['firstName'];
$lastName=     $_POST['lastName'];
$email=        $_POST['email'];

if(isset($_POST['Submit'])) {
  $sql ="INSERT INTO users(firstName, lastName, email) 
         VALUES('$firstName', '$lastName','$email')";
  
  if(empty($firstName)){
    echo 'First name empty';
  }elseif(empty($lastName)){
    echo 'Last name empty';
  }elseif(empty($email)){
    echo 'Email empty';
 }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo 'please Enter valied Email';
 }
 
 else{
    if(mysqli_query($conn,$sql)){
        header('Location: index.php');
    }else{
      echo'Error: ' . mysqli_error($conn);
    }
  
}

}