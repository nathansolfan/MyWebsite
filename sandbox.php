<?php 
// session 
// we check if the user has submitted the form with if(isset)
if(isset($_POST['submit'])){
    // we have to call it before anything else
    session_start();
    // setcookie function takes 3 parameters - 1st name, 2nd value and 3rd the duration in seconds   
    setcookie('gender',$_POST['gender'], time() + 86400 );
    // get the S_SESSION superglobal, different variable, equal to the $_Post superglobal
    $_SESSION['name'] = $_POST['name'];
    echo $_SESSION['name'];
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="" name="name">
    <!-- create a selection bar, which we name gender, and we can pick from male/female -->
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="submit" name="submit" value="submit">
</form>    
</body>
</html>