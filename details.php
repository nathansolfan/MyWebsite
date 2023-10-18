<?php

include('config/db_connect.php');

// we named the btn delete and here we grab its action 
if (isset($_POST['delete'])) {
// we create this variable
// we use the mysqli_real_escape_string just in case the user tampers with the data
    $id_to_delete = mysqli_real_escape_string($connection, $_POST['id_to_delete']);
// we use the DELETE now. we delete from the pizza table and only the id that matches
    $sql = "DELETE FROM pizzas WHERE id = '$id_to_delete'";

    if(mysqli_query($connection, $sql)){
        // if success we redirect to index.php
        header('Location: index.php');
    } {
        // fail
        echo "query error: ". mysqli_error($connection);
    }
}
    

// check GET request parameters
// isset checks for the existence of a variable
// we check if the ID is set in the URL, then it will pass
if (isset($_GET['id'])) {
    // we escape any sensitive characters, it takes 2 parameters, protects the database
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";
    // make query = consulta = $result 
    $resultado = mysqli_query($connection, $sql);
    // fetch = buscar but i`ll take a single row
    $pizza = mysqli_fetch_assoc($resultado);
    // free results
    mysqli_free_result($resultado);
    // close connection
    mysqli_close($connection);
    print_r($pizza);
};

?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php'); ?>
<!-- if pizza exists, now we use : instead of { -->
<div class="container center">
    <?php if($pizza): ?>
    <!-- since we fetch an array from $resultado=result, we can select the title from it -->
    <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
    <!-- heres the same but we have an extra detail like created by -->
    <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
    <p><?php echo date($pizza['created_at']); ?></p>
    <h5>Ingredients:</h5>
    <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

    <!-- DELETE FORM  - create a btn to delete -->
    <!-- action is the file we want to run it from and the METHOD-->
    <form action="details.php" method="POST">
        <!-- we hide it, name it and the value is equal to id, we get it from $_GET  -->
        <!-- and we can display its ID as the value -->
        <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
        <!-- this is the submit button -->
        <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
    </form>


    
    <?php else: ?>
        <!-- if there is an error we display on else, for example if we type an id that doesnt exist -->
        <h5>No pizza at the moment</h5>
    <?php endif ?>
    </div>;
<?php include('templates/footer.php'); ?>

</html> 