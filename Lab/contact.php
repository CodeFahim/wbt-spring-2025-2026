<?php require_once "contact_process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Tahsin Ahmed Fahim</title>
    <link rel="stylesheet" href="../wbt/contact.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="educations.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="projects.html">Projects</a></li>
            </ul>
        </nav>

        <h1>Contact Me</h1>
        <h3>Let's Build Something Together</h3>
    </header>

    <main>
        <section>
            <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <fieldset>
                    <legend>Contact Form</legend>

                    <table>
                        <tr>
                            <td><label for="name">Name <span class="required">*</span>:</label></td>
                            <td>
                                <input type="text" id="name" name="name" placeholder="Enter your name" value="<?= $name ?>">
                                <span class="error"><?= $nameErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="lname">Last Name <span class="required">*</span>:</label></td>
                            <td>
                                <input type="text" id="lname" name="lname" placeholder="Enter your last name" value="<?= $lname ?>">
                                <span class="error"><?= $lnameErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td>Gender <span class="required">*</span></td>
                            <td>
                                <input type="radio" name="gender" value="female" <?= ($gender == "female") ? "checked" : "" ?>> Female
                                <input type="radio" name="gender" value="male" <?= ($gender == "male") ? "checked" : "" ?>> Male
                                <span class="error"><?= $genderErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="email">Email <span class="required">*</span>:</label></td>
                            <td>
                                <input type="text" id="email" name="email" placeholder="Enter your email" value="<?= $email ?>">
                                <span class="error"><?= $emailErr ?></span>
                            </td>
                        </tr>

                        <tr>
    <td><label for="company">Company <span class="required">*</span>:</label></td>
    <td>
        <input type="text" id="company" name="company" placeholder="Enter your company name" value="<?= $company ?>">
        <span class="error"><?= $companyErr ?></span>
    </td>
</tr>

                        <tr>
                            <td><label>Reason of Contact <span class="required">*</span>:</label></td>
                            <td>
                                <input type="radio" name="reason" value="projects" <?= ($reason == "projects") ? "checked" : "" ?>> Projects
                                <input type="radio" name="reason" value="thesis" <?= ($reason == "thesis") ? "checked" : "" ?>> Thesis
                                <input type="radio" name="reason" value="job" <?= ($reason == "job") ? "checked" : "" ?>> Job
                                <span class="error"><?= $reasonErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td><label>Topics:</label></td>
                            <td>
                                <input type="checkbox" name="topic[]" value="web"> Web Development
                                <input type="checkbox" name="topic[]" value="mobile"> Mobile Development
                                <input type="checkbox" name="topic[]" value="ai"> AI/ML Development
                            </td>
                        </tr>

                        <tr>
                            <td><label for="date">Consultation Date <span class="required">*</span>:</label></td>
                            <td>
                                <input type="date" id="date" name="date" value="<?= $date ?>">
                                <span class="error"><?= $dateErr ?></span>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Submit">
                                <input type="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
                !$nameErr && !$lnameErr && !$emailErr && !$genderErr && !$companyErr && !$reasonErr && !$DateErr): ?>
                <h3>Submitted values</h3>
                <table class="result-table">
                    <tr><td>Name</td><td><?= $name ?></td></tr>
                    <tr><td>Last Name</td><td><?= $lname ?></td></tr>
                    <tr><td>Email</td><td><?= $email ?></td></tr>
                    <tr><td>Company</td><td><?= $company ?></td></tr>
                    <tr><td>Reason of Contact</td><td><?= $reason ?></td></tr>
                    <tr><td>Gender</td><td><?= $gender ?></td></tr>
                    <tr><td>Consultation Date</td><td><?= $date ?></td></tr>
                </table>
            <?php endif; ?>

        </section>
    </main>

    <footer>
        <nav>
            <ul>
                <li>
                    <a href="https://www.linkedin.com/in/tahsin-ahmed-fahim-5781453b3/" target="_blank">
                        <img src="../data/linkedin.png" alt="LinkedIn Profile" width="32">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/CodeFahim" target="_blank">
                        <img src="../data/github.png" alt="GitHub Profile" width="32">
                    </a>
                </li>
            </ul>
        </nav>
    </footer>

</body>
</html>