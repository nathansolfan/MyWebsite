<?php

// MYSQLI or PDO use 2nd as i get mroe advanced
include('config/db_connect.php');

// write query for all pizzas
// pizza_nathan is the databse - 

$sql = 'SELECT title, ingredients, id FROM pizzas';

// make query and get results
// takes 2 parameters, basically the database and then what we want from it
// query = consulta
$result = mysqli_query($connection, $sql);

// fetch the rows as an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo $pizzas;

// clear the results
mysqli_free_result($result);

// close connection

mysqli_close($connection);
// now that we display the data we can comment this code underneath
// print_r($pizzas)


// explode function
// to split into an array, 2nd arguement is the string
// we output $pizza['ingredients'] at the bottom
    // print_r(explode(',',$pizzas [0]['ingredients']));

?>
<!DOCTYPE html>
<html lang="en">

<?php
include('templates/header.php');
?>

<h4 class="center grey-text">Pizzas:</h4>
<div class="container">
    <div class="row">
        <!-- we replace the { with : and at the end with endforeach -->
        <?php foreach($pizzas as $pizza) : ?>

<div class="col s6 md3">
    <div class="card z-depth-0">
        <div class="card-content center">
            <h6> <?php echo htmlspecialchars($pizza['title'])?></h6>
            <div> <?php echo htmlspecialchars($pizza['ingredients']) ?> </div>
            <ul> <?php foreach(explode(',', $pizza['ingredients']) as $ing) { ?>
                <li> <?php echo htmlspecialchars($ing); ?></li>
                <?php } ?>            
            </ul>
        </div>
        <div class="card-action right align"> 
            <a href="#" class="brand-text">More Info</a>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- thats the example for above, where we can take the { and add : -->
<!-- for example : , : , endif  -->
<?php if(count($pizzas) >= 2) : ?>
<p>There are 2 or more pizzas</p>
<?php  else: ?>
<p>There are less than 2 pizzas</p>
<?php endif  ?>    
    
</div>
</div>

<?php
include('templates/footer.php')
?>

</html>