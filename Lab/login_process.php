<?php
$email = $password = "";
$emailErr = $passwordErr = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = cleanInput($_POST["password"]);
        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters";
        }
    }

    if ($email === "" || $password === "") {
    $error = "Email and password are required.";
} else {

    $conn = mysqli_connect("localhost", "root", "", "webtechdb");

    $stmt = mysqli_prepare(
        $conn,
        "SELECT * FROM students WHERE email = ? AND password = ?"
    );

    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $message = "Login successful!";
    } else {
        $message = "Invalid email or password";
    }

    mysqli_stmt_close($stmt);
}
}
?>