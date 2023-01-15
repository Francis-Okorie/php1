
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container center">
        <form action="login.php" method="post" >
            <h1>Login</h1>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <div class="user-pass">
            <div class="username-details">
            <div class="username-acct">
            <label for="">Username</label>
            </div>
            <div class="username-text">
            <input type="text" name="uname" placeholder="Enter a Username">
            </div>
            </div>

            <div class="password-details">
            <div class="password-acct">
            <label for="">Password</label>
            </div>
            <div class="password-text">
            <input type="text" name="password" placeholder="Enter your password">
            </div>
            </div>
            </div>
            

            <div class="btnsubmit down">
                <a href="signup.php" class="grew">Create an account</a>
                <button type="submit" >Login</button>
            </div>
        </form>
    </div>
</body>
</html>