<?php

include('config/db_connect.php');

// (isset)
// if(isset($_GET['submit'])){
//      echo $_GET['email'];
//      echo $_GET['title'];
//      echo $_GET['ingredients'];
// }
$title = $email = $ingredients = "";
// we create an variable errors as an array, set it as a empty value to start with and it will take the 3 inputs for the error
// and ASSOCIATE the variable names to the echo
// array synxtas in PHP = array('name' => 'string' , 'secondname' => 'string', etc)
$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

if(isset($_POST['submit'])){
   
    //check email
    // stores the email from $_POST in a variable email
    // basically filter_Var( takes 2 components) and ! to turn it negative
    if(empty($_POST['email'])){
        $errors['email'] = 'email must be a valid one';
    }else{
        // grab the $_POST and put in a variable
        $email = $_POST['email'];
        // check now that it is actually an email, using a PHP filter_var method, takes 2 parameters, we wanna check the email first parameter
        // second parameter is the filter we wanna apply, this is built in PHP
        // basically takes the value user enters and check if valid email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            // echo if NOT true, doing so we save lines of code, and will fire an error 
            $errors['email'] = 'email must be a valid one';
        }
    }
    // this check title

    if(empty($_POST['title'])){
        $errors['title'] = 'title must be valid my man';
    }else{
        // we do the same here, grab the title and put it in a var
        // use REGEX preg_match and 2 parameters, the first '/^[a-zA-Z\s]+$/'
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'title must be valid my man';
        }    
    }

    // this check ingredients
    if(empty($_POST['ingredients'])){
        echo 'Cant make pizza from 0<br />';
    }else{
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'must put commas';                
        }    
    }

    // check if there are errors
    // if there are no errors, will return false and with method header('location: index.php') will send the user back to main page

    if(array_filter($errors)){
        echo "there are errors in the form";
    }else{
        // header('location: index.php' we just redirect user to main page)
        // echo"form is valid";
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $title = mysqli_real_escape_string($connection, $_POST['title']);
        $ingredients = mysqli_real_escape_string($connection, $_POST['ingredients']);
        

        // create sql
        // we INSERT INTO the pizzas row we created, and the following rows title, email, ingre
        // then the VALUES will be the variables we have
        // the other 2 we dont need to worry is the timeCreated and the ID 
        $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$email', '$title', '$ingredients')";

        // save to Database and check
        // mysqli_query takes the 2 variables, connection which is the database 
        // and $sql which is the values
        // and once it is saved we send it to index
        if(mysqli_query($connection, $sql)){
            // succes
            header('location: index.php');
        } else{
            // error
            echo "query - consulta error " . mysqli_error($connection);
        }
    };
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
        <input type="text" name="email" value="<?php echo $email ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Pizza title</label>
        <input type="text" name="title" value="<?php echo $title ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>


        <label>Ingredients:</label>
        <input type="text" name="ingredients" value="<?php echo $ingredients ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php
include('templates/footer.php')
?>

</html>