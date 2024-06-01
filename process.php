<?php
/*
* KEYAUTH.CC PHP EXAMPLE
*
* Edit credentials.php file and enter name & ownerid from https://keyauth.cc/app
*
* READ HERE TO LEARN ABOUT KEYAUTH FUNCTIONS https://github.com/KeyAuth/KeyAuth-PHP-Example#keyauthapp-instance-definition
*
*/
include 'keyauth.php';
include 'credentials.php';

if (isset($_SESSION['user_data'])) {
        header("Location: index.php ");
        exit();
}

$KeyAuthApp = new KeyAuth\api($name, $ownerid);

if (!isset($_SESSION['sessionid'])) {
        $KeyAuthApp->init();
}
?>

<html lang="en" class="bg-[#09090d] text-white overflow-x-hidden">

<head>
    <title>Nullcrum.win</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://cdn.keyauth.cc/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.cs">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link rel="stylesheet" href="https://cdn.keyauth.cc/v3/dist/output.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <?php
        if (isset($_POST['login'])) {
               
                if ($KeyAuthApp->login($_POST['username'], $_POST['password'])) {
                        echo "<meta http-equiv='Refresh' Content='2; url=index.php'>";
                        $KeyAuthApp->success("You have successfully logged in!");
                }
        }

        if (isset($_POST['register'])) {
               
                if ($KeyAuthApp->register($_POST['username'], $_POST['password'], $_POST['key'])) {
                        echo "<meta http-equiv='Refresh' Content='2; url=login.php'>";
                        $KeyAuthApp->success("You have successfully registered!");
                }
        }
        ?>

</body>

</html>
