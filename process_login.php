
<?php

include_once 'functions.php';
include_once 'db-config.php';

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($mysqli->connect_error) {
    echo "mysqli conn err";
    header("Location: ../alumni/error.php?err=Unable to connect to MySQL");
    exit();
}

if (isset($_POST['loginid'], $_POST['psswd'])) {
    //$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    //$password = $_POST['p']; // The hashed password.
    $loginid = $_POST['loginid'];
    $password = $_POST['psswd'];

    if (login($loginid, $password, $mysqli) == true) {
        // Login success
        header("Location: alum-login.php");
        exit();
    } else {
        // Login failed
        header('Location: ../index.php?error=1');
        exit();
    }
} else {
    // The correct POST variables were not sent to this page.
    header('Location: ../error.php?err=Could not process login');
    exit();
}
?>
