<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login System</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Welcome to Our Clinic</h1>
            <h3>
                <?php
                output_username();
                ?>
            </h3>
        </header>

        <main>
            <?php if (!isset($_SESSION["user_id"])) { ?>
                <section class="form-section">
                    <h3>Login</h3>
                    <form action="includes/login.inc.php" method="post" class="form">
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="password" name="pwd" placeholder="Password" required>
                        <button type="submit">Login</button>
                    </form>
                    <?php check_login_errors(); ?>
                </section>
            <?php } ?>

            <section class="form-section">
                <h3>Signup</h3>
                <form action="includes/signup.inc.php" method="post" class="form">
                    <?php signup_inputs(); ?>
                    <button type="submit">Signup</button>
                </form>
                <?php check_signup_errors(); ?>
            </section>

            <?php if (isset($_SESSION["user_id"])) { ?>
                <section class="form-section">
                    <h3>Logout</h3>
                    <form action="includes/logout.inc.php" method="post" class="form">
                        <button type="submit">Logout</button>
                    </form>
                </section>
            <?php } ?>
        </main>
    </div>
</body>

</html>