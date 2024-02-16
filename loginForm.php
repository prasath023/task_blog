<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; flex-direction: row;">
    <form action="includes/login.inc.php" method="post" style="display: flex; flex-direction: column;">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit" value='submit' >Login</button>
        <div>
            <p>Create a new account </p>
            <a href="signupForm.php">Singup</a>
        </div>
    </form>
    </div>
</body>
</html>