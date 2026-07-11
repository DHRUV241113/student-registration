<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>
    <div class="login-box">
        <form action="register_process.php" method="POST">

            <h2>Register</h2>

            <div class="input-box">
                <input type="text" name="fullname" required>
                <label>Full Name</label>
            </div>

            <div class="input-box">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>

            <div class="input-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <button type="submit">Register</button>

            <div class="login-register">
                <p>Already have an account?
                    <a href="index.php">Login</a>
                </p>
            </div>

        </form>
    </div>
</section>

</body>
</html>