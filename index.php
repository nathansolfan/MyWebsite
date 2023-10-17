<?php

// MYSQLI or PDO use 2nd as i get mroe advanced

// connect to the database - takes 4 parameters
$connection = mysqli_connect('localhost', 'nathan', 'test1234', 'pizza_nathan');

// check if connection works, with ! it`ll echo when it fails
if(!$connection){
    echo 'connection error:' . mysqli_connect_error();
}

// write query for all pizzas
// pizza_nathan is the databse - 

$sql = 'SELECT title, ingredients, id FROM pizzas';

// make query and get results
// takes 2 parameters, basically the database and then what we want from it

$result = mysqli_query($connection, $sql);

// fetch the rows as an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// clear the results
mysqli_free_result($result);

// close connection

mysqli_close($connection);

print_r($pizzas)



?>
<!DOCTYPE html>
<html lang="en">

<?php
include('templates/header.php');
?>

<h4 class="center grey-text">Pizzas:</h4>
<div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizza) { ?>

<div class="col s6 md3">
    <div class="card z-depth-0">
        <div class="card-content center">
            <h6> <?php echo htmlspecialchars($pizza['title'])?></h6>
            <div> <?php echo htmlspecialchars($pizza['ingredients']) ?> </div>
        </div>
        <div class="card-action right align">
            <a href="#" class="brand-text">More Info</a>
        </div>
    </div>
</div>
<?php } ?>
</div>
</div>

<?php
include('templates/footer.php')
?>

</html>