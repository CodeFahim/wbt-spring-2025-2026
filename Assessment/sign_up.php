<?php require_once "signup_process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<header>
  <h1>Sign up page</h1>
</header>

<main>
<section class="signup-form">

<form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<fieldset>
  <legend>Signup Form</legend>

  <table>
    <tr>
      <td><label for="firstname">First Name: </label></td>
      <td>
        <input type="text" id="firstname" name="firstname" value="<?= $firstname ?>">
        <span class="error"><?= $firstnameErr ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="lastname">Last Name: </label></td>
      <td>
        <input type="text" id="lastname" name="lastname" value="<?= $lastname ?>">
        <span class="error"><?= $lastnameErr ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="email">Email: </label></td>
      <td>
        <input type="text" id="email" name="email" value="<?= $email ?>">
        <span class="error"><?= $emailErr ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="password">Password: </label></td>
      <td>
        <input type="password" id="password" name="password">
        <span class="error"><?= $passwordErr ?></span>
      </td>
    </tr>

    <tr>
      <td><label for="contact">Contact Number: </label></td>
      <td>
        <input type="text" id="contact" name="contact" value="<?= $contact ?>">
        <span class="error"><?= $contactErr ?></span>
      </td>
    </tr>

    <tr>
      <td></td>
      <td>
        <input type="submit" value="Register">
        <input type="reset" value="Reset">
      </td>
    </tr>

  </table>

</fieldset>
</form>

<?php if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    !$firstnameErr && !$lastnameErr && !$emailErr && !$passwordErr
): ?>

<h3>Submitted values</h3>
<table class="result-table">
  <tr><td>First Name:</td><td><?= $firstname ?></td></tr>
  <tr><td>Last Name:</td><td><?= $lastname ?></td></tr>
  <tr><td>Email:</td><td><?= $email ?></td></tr>
  <tr><td>Contact No:</td><td><?= $contact ?></td></tr>
</table>

<?php endif; ?>

</section>
</main>

</body>
</html>