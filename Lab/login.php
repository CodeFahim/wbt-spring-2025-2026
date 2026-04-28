<?php require_once "login_process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>

<body>

    <header>
        <h1>Login Page</h1>
        <h3>Login using your email and password</h3>
    </header>

    <main>
        <section>
            <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset>
                    <legend>Login</legend>

                    <table>
                    <tr>
                        <td><label for="email">Username<span class="required">*</span>:</label></td>
                        <td>
                            <input type="text" id="email" name="email" placeholder="Enter your email" value="<?= $email ?>">
                            <span class="error"><?= $emailErr ?></span>
                        </td>
                    </tr>


                    <tr>
                        <td><label for="password">Password <span class="required">*</span>:</label></td>
                        <td>
                            <input type="password" id="password" name="password" placeholder="Enter your password">
                            <span class="error"><?= $passwordErr ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Login">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

           <?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
                 !$emailErr && !$passwordErr): ?>
                <h4>Login Submitted Values</h4>
            <table class="result-table">
                <tr><td>Username :</td><td><?= $email ?></td></tr>
                <tr><td>Password :</td><td>Valid password entered</td></tr>
            </table>

        <?php endif; ?>
    </section>
</main>

</body>
</html>