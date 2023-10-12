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
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email must be a valid one';
        }

    }
    // this check title

    if(empty($_POST['title'])){
        echo 'Put the title <br />';
    }else{
        echo htmlspecialchars($_POST['title']);    
    }

    // this check ingredients
    if(empty($_POST['ingredients'])){
        echo 'Cant make pizza from 0<br />';
    }else{
        echo htmlspecialchars($_POST['ingredients']);    
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