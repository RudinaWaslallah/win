<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">RU Shop</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
        </nav>
    </div>
    <div class="position-relative  text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Register Now</h1>
            <p class="lead fw-normal">To get coupons</p>
            <p class="lead fw-normal">Time to finish</p>
            <h3 id="countdown"></h3>

        </div>
    </div>
</header>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <h3>Please Enter your information</h3>

    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo htmlspecialchars($firstName); ?>">
        <div class="form-text error"><?php echo $errors['firstNameError']; ?></div>
    </div>

    <div class="mt-5">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo htmlspecialchars($lastName); ?>">
        <div class="form-text error"><?php echo $errors['lastNameError']; ?></div>
    </div>

    <div class="mt-5">
        <label for="email" class="form-label">Email address</label>
        <input type="text" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
        <div class="form-text error"><?php echo $errors['emailError']; ?></div>
    </div>

    <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
</form>

<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner" class="btn btn-primary">
        Select winner
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal">The winner is</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php foreach ($users as $user) : ?>
                    <h1 class="display-3 text-center modal-title" id="modal"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?></h1>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div id="cards" class="row mb-5 pb-5">
    <!-- ... (your card content) ... -->
</div>

<?php include './parts/footer.php'; ?>

<script src="/js/script.js"></script>
