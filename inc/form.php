<?php
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['Submit'])) {

    // التحقق من الاسم الأول 
    if (empty($firstName)) {
        $errors['firstNameError'] = 'please enter first Name';
    }

    // التحقق من الاسم الثاني
    if (empty($lastName)) {
        $errors['lastNameError'] = 'please enter Last Name';
    }

    // التحقق من الايميل  
    elseif (empty($email)) {
        $errors['emailError'] = 'please enter Email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = 'please enter valid email';
    }

    // تحقق لا يوجد أخطاء
    if (!array_filter($errors)) {
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "INSERT INTO users(firstName, lastName, email) 
          VALUES('$firstName', '$lastName', '$email')";

        if (mysqli_query($conn, $sql)) {
            header('Location:'.$_SERVER['PHP_SELF']);
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}

