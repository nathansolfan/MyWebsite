<?php 
// SUPERGLOBALS
// We have used 2 so far, $_GET[] and $_POST[]
echo $_SERVER['SERVER_NAME'] . '<br />';
echo $_SERVER['REQUEST_ME THOD'] . '<br />';
echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
echo $_SERVER['PHP_SELF'] . '<br />';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><?php echo $score > 30 ? "Yeah" : "Nope"; ?></h1>
    
</body>
</html>