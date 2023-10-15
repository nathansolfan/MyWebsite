<?php

// (isset)
// if(isset($_GET['submit'])){
//      echo $_GET['email'];
//      echo $_GET['title'];
//      echo $_GET['ingredients'];
// }

if(isset($_POST['submit'])){
   

    //check email
    // stores the email from $_POST in a variable email
    // basically filter_Var( takes 2 components) and ! to turn it negative
    if(empty($_POST['email'])){
        echo 'Need an email <br />';
    }else{
        // grab the $_POST and put in a variable
        $email = $_POST['email'];
        // check now that it is actually an email, using a PHP filter_var method, takes 2 parameters, we wanna check the email first parameter
        // second parameter is the filter we wanna apply, this is built in PHP
        // basically takes the value user enters and check if valid email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            // echo if NOT true, doing so we save lines of code, and will fire an error 
            echo 'email must be a valid one';
        }
    }
    // this check title

    if(empty($_POST['title'])){
        echo 'Put the title <br />';
    }else{
        // we do the same here, grab the title and put it in a var
        // use REGEX preg_match and 2 parameters, the first '/^[a-zA-Z\s]+$/'
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            echo 'title must be valid my man';
        }    
    }

    // this check ingredients
    if(empty($_POST['ingredients'])){
        echo 'Cant make pizza from 0<br />';
    }else{
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            echo 'must put commas';                
        }    
    }

}
// thi is the end of the POST



?>
<!DOCTYPE html>
<html lang="en">

<?php
include('templates/header.php');
?>

<section class="container grey-text">
    <h4 class="center">Add a pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your email</label>
        <input type="text" name="email">

        <label>Pizza title</label>
        <input type="text" name="title">

        <label>Ingredients:</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php
include('templates/footer.php')
?>

</html>