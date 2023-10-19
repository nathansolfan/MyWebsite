<?php 
// session 
// we check if the user has submitted the form with if(isset)
if(isset($_POST['submit'])){
    // we have to call it before anything else
    session_start();
    // get the S_SESSION superglobal, different variable, equal to the $_Post superglobal
    $_SESSION['name'] = $_POST['name'];
    echo $_SESSION['name'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="" name="name">
    <input type="submit" name="submit" value="submit">
</form>    
</body>
</html>