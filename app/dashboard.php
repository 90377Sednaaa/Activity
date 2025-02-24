<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        h1 {
            font-weight: bolder;
            font-size: 70px;
            background-image: url("https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExZ2IwMGRhczU1a2gzNzhodXV6MnU2enp5NjNjcGJuZ3c4dDh1czB4biZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/26ufmyrjQ4BmKN7xe/giphy.gif");
            background-size: cover;
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
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
            background-image: url("https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExaGVsZmF4Zjdyem5hN3Y0Znk0eXZ2ejFhdGR5cHpqdXB5bDl3dHg1eSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/gUaZt0tOrjxdGKOW6C/giphy.gif");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .main-container {
            display: flex;
            width: 650px;
            height: 550px;
            flex-direction: column;

            align-items: center;
            background-color: rgb(127, 214, 200);
            border-radius: 20px;
            animation: container 3s linear infinite;
        }

        @keyframes container {
            0% {
                background-color: rgb(134, 103, 163);
            }

            50% {
                background-color: rgb(91, 211, 81);
            }

            100% {
                background-color: rgb(212, 77, 77);
            }
        }

        .title {
            margin-top: 30px;

        }

        .form-container {
            display: flex;

        }

        .name-container {
            width: 500px;
            height: 100px;
            background-color: aqua;
            border-radius: 20px;
            margin-left: 80px;
            animation: infos 60s linear infinite;
            box-shadow: 5px 5px 5px;
        }

        /* @keyframes infos {
            0% {
                transform: translateY(0px);
                transform: rotateY(0deg);
            }

            50% {
                transform: translateY(-10px);
                transform: rotateY(360deg);
            }

            100% {
                transform: translateY(0px);
                transform: rotateY(0deg);
            }
        } */

        .Headings {
            margin: 10px 10px;
            font-size: 20px;
            font-weight: bold;
        }

        .info {
            margin-left: 10px;
            
        }
    </style>

</head>

<body>
    <div class="main-container">
        <div class="title mb-3">
            <h1>Dashboard</h1>
        </div>
        <div class="row g-3">
            <div class="col-md-12 name-container">
                <p class="Headings">
                    Your First Name is:
                </p>
                <p class="h4 info">
                <?php echo htmlspecialchars($_SESSION['firstname']); ?>
                </p>
            </div>
            <div class="col-md-12 name-container">
                <p class="Headings">
                    Your Last Name is:
                </p>
                <p class="h4 info">
                <?php echo htmlspecialchars($_SESSION['lastname']); ?>
                </p>
            </div>
            <div class="col-md-12 name-container">
                <p class="Headings">
                    Your Email is:
                </p>
                <p class="h4 info">
                <?php echo htmlspecialchars($_SESSION['email']); ?>
                </p>
            </div>
        </div>
        <a href="../Includes/logout.php" class="btn btn-danger mt-3">Logout</a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>