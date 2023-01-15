<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <div class="container center">
     <input type="file" id="image-input" accept="image/jpeg, image/png, image/jpg">

<div id="display-image"></div>
     </div>
     <a href="logout.php" class="center">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

