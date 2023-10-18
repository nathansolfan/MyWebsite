<?php 
// if statement 
$score = 50;
if($score > 30){
    echo "Score is greater than 30";
}
else 
{
    echo "Score is less than 30";
}
// ternary operators - takes less lines of code and looks neater
$score = 20;
echo $score > 30 ? "Yeah" : "Nope";

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