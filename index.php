<?php
include './inc/conn.php';
include './inc/form.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">RU Shope</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Register Now</h1>
      <p class="lead fw-normal">To get cobons.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>
  
</header>
<form>
<from class="mt-5" action="index.php" method="POST">
    <h3>Please Enter your information</h3>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $errors['firstNameError'] ?> </div>
  </div>
  <div class="mt-5">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
  
  <div class="mt-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text"name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

    


    <?php foreach ($users as $user) : ?>
        <h1><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . '<br> ' . htmlspecialchars($user['email']); ?></h1>
    <?php endforeach; ?>
    <script src="./js/bootstrap.bundle.min.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>