<?php
$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $contactErr = "";
$firstname = $lastname = $email = $password = $contact = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
    } else {
        $firstname = cleanInput($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
            $firstnameErr = "Only letters and white space allowed";
        }
    }

  
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
    } else {
        $lastname = cleanInput($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
            $lastnameErr = "Only letters and white space allowed";
        }
    }

    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["contact"])) {
    $contactErr = "Contact number is required";
} else {
    $contact = cleanInput($_POST["contact"]);
    if (!preg_match("/^[0-9]{11}$/", $contact)) {
        $contactErr = "Contact number must be 11 digits";
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

    if ($firstname === "" || $lastname === "" || $email === "" || $contact === "" || $password === "") {
        $error = "All fields are required and age must be a positive number.";
    } else {

        $conn = mysqli_connect("localhost", "root", "", "webtechdb");
        $stmt = mysqli_prepare(
            $conn,
            "INSERT INTO students (first_name, last_name, email, contact, password)
             VALUES (?, ?, ?, ?, ?)"
        );
        mysqli_stmt_bind_param($stmt, "sssis", $firstname, $lastname, $email, $contact, $password);

        if (mysqli_stmt_execute($stmt)) {
            $message = "Student added successfully (ID: "
                     . mysqli_stmt_insert_id($stmt) . ").";
        } else {
            $error = "Could not add student: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    }
   
}

 
?>