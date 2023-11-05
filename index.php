<?php
$firstName=    $_POST['firstName'];
$lastName=     $_POST['lastName'];
$email=        $_POST['email'];

if(isset($_POST['submit'])){
echo $firstName .' '. $lastName .' '. $email ;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post" >
    <input type="text" name="firstname" id="firstname" placeholder="First Name">
    <input type="text" name="lastname" id="lastname" placeholder="Last Name">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="Submit" name="Submit"  value="Send">
</form>
    <script src="./js/script.js"></script>
</body>
</html>