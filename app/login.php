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
            height: 390px;
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
            <h1>Log In</h1>
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger"><?php echo $_SESSION['error'];
                                                unset($_SESSION['error']); ?></div>
            <?php endif; ?>
        </div>
        <div class="form-container">
            <form class="row g-3 mt-3" method="post" action="../Includes/login.inc.php" style="margin: 40px auto;">
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="ms-2">
                    <button type="submit" class="btn btn-primary" name="login">Log In</button>
                </div>
                <div class="d-flex justify-content-center ">
                    <p>Dont Have an Account?</p><a href="../index.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        function checkForm() {
            alert("Form is submitting!");
            return true;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>