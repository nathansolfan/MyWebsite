<?php


$conn = mysqli_connect('localhost', 'nathan', 'test1234', 'pizza_nathan');

if(!$conn){
    echo 'connection error:' . mysqli_connect_error();

}

?>
<!DOCTYPE html>
<html lang="en">

<?php
include('templates/header.php');
?>
<?php
include('templates/footer.php')
?>

</html>