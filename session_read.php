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
    print("This is your session: "); print_r($_SESSION); print("<br>");
    print("This is your session value: ". $_SESSION['name']);
?>

</body>
</html>