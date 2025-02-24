<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <style>
        h1 {
            font-weight: bolder;
        }

        * {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .main-container {
            display: flex;
            margin: auto auto;
            width: 550px;
            height: auto;
            flex-direction: column;
            align-items: center;
            background-color: rgb(127, 214, 200);
            border-radius: 20px;
        }

        .title {
            margin-top: 30px;
        }

        .form-container {
            display: flex;

        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="title">
            <h1>Sign Up</h1>
        </div>
        <div class="form-container">

            <form class="row g-3 mt-3" action="Includes/signup.inc.php" method="post" style="margin: 40px auto;">
                <div class="col-12">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div class='alert alert-danger'>{$_SESSION['error']}</div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="ms-2">
                    <button class="btn btn-primary">Sign Up</button>
                </div>
                <div class="d-flex justify-content-center ">
                    <p>Have an Account?</p><a href="../Activity/app/login.php">Log In</a>

                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>