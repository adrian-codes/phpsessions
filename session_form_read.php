<?php session_start();

?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Read Session</title>
</head>
<body>

<?php 
    print("This is your username: ". $_SESSION['username']); print("<br>");
    print("This is your password: ". $_SESSION['password']);
?>

</body>
</html>