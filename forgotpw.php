<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>

<body>
    <h2>Forgot Password</h2>
    <!-- Email form -->
    <form action="forgotpw.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required><br>
        <button type="submit" name="submit_email">Submit</button>
    </form>
    
    <!-- Reset Password form (after email verification) -->
    <form action="forgotpw.php" method="POST">
        <input type="password" name="new_password" placeholder="New password" required><br>
        <button type="submit" name="reset_password">Reset Password</button>
    </form>
    
</body>

</html>