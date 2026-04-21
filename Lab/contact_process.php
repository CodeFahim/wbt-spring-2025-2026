<?php
$nameErr = $lnameErr = $emailErr = $websiteErr = $genderErr = $companyErr = $reasonErr = $dateErr = "";
$name = $lname = $email = $website = $gender = $comment = $company = $reason = $date = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = cleanInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
}   else {
    $lname = cleanInput($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
        $lnameErr = "Only letters and white space allowed";
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

    if (empty($_POST["company"])) {
    $companyErr = "Company is required";
    } else {
    $company = cleanInput($_POST["company"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $company)) {
        $companyErr = "Only letters and white space allowed";
    }
    }

     if (empty($_POST["reason"])) {
        $reasonErr = "Reason of contact is required";
    } else {
        $reason = cleanInput($_POST["reason"]);
    }

    $website = cleanInput($_POST["website"] ?? "");
    if (!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)) {
        $websiteErr = "Invalid URL";
    }

    if (empty($_POST["date"])) {
        $dateErr = "Consultation date is required";
    } else {
        $date = cleanInput($_POST["date"]);
    }

    $comment = cleanInput($_POST["comment"] ?? "");

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = cleanInput($_POST["gender"]);
    }
}
