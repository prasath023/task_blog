<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section style="display: flex; flex-direction: row;justify-content:space-around;align-items:center">
    <div>
    <form action="includes/signup.inc.php" method="post" style="display: flex; flex-direction: column;">
        <input type="text" name="uname" placeholder="user name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="cpassword" placeholder="confirm password">
        <button type="submit" name="submit" value="submit">Sign Up</button>
    </form>
    </div>
    </section>
</body>
</html>



