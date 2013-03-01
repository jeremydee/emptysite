<?php
    $cTitle = "Empty Site";
    $cLine = "Welcome to ".$_SERVER['HTTP_HOST'].". The time is ".date('r');
?>

<html>
<head><title><?php echo $cTitle?></title></head>
<body>
<?php echo $cLine; ?>
</body>
</html>
