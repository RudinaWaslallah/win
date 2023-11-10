<?php
include './inc/conn.php';
include './inc/form.php';

 $sql='SELECT * FROM users';
 $result= mysqli_query($conn,$sql);
 $users=mysqli_fetch_all($result , MYSQLI_ASSOC);

 
mysqli_free_result($result);
mysqli_close($conn);

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
<form action="index.php" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="Submit" name="Submit"  value="Send">
</form>

<?php foreach($users as $user): ?>
   <h1><?php echo htmlspecialchars($user['firstName']). ' '. htmlspecialchars($user['lastName']). '<br> '. htmlspecialchars($user['email']); ?></h1>
 <?php endforeach; ?>

    <script src="./js/script.js"></script>
</body>
</html>