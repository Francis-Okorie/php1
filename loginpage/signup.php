<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container center">
    <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="name-confirm top">
          <label>Name</label>
          </div>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <div class="username-div top">
          <label>User Name</label>
          </div>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<div class="enter-pass top">
         <label>Password</label>
        </div>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

        <div class="confirmpass top">
        <label>Re Password</label> 
        </div>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	  <div class="down">
           <button type="submit">Sign Up</button>
          <a href="index.php" class="ca grew">Already have an account?</a> 
          </div>
     </form>
    </div>
</body>
</html>