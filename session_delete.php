<?php session_start(); ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Session Delete</title>
</head>
<body>
<?php 
    unset($_SESSION['name']);
?>


</body>
</html>