<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

<!-- create a form -->
<!-- vai action e method     -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
    <input type="number" name="num01" placeholder="Number 1">
    <select name="operator" >
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="text" name="num02" placeholder="Number 2">
    <button>Calculate</button>
    </form>

    <!-- 16min 40 -->
    <?php

// grab data

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST,"num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // handle errors
        $errors = false;
        if(empty($num1) || empty($num2) || empty($operator)){
            echo "<p class='calc-error'>Fill in all fields!!</p>";
            $errors = true;
        }
        if(!is_numeric($num1) || !is_numeric($num2)){
            echo "<p class='calc-error'>Fill in all fields!!</p>";
            $errors = true;
        }
        if(!$errors){
            $value = 0;
            switch ($operator) {
                case 'add':
                    $value = $num1 + $num2;
                    break;
                case 'subtract':
                    $value = $num1 - $num2;
                    break;
                
                case 'multiply':
                    $value = $num1 * $num2;
                    break;
                case 'divide':
                    $value = $num1 / $num2;
                    break;
                
                
                default:
                echo "<p class='calc-error'>Something went bad</p>";
                break;
            }
            echo "<p class='calc-results'>Results = " . $value . "</p>";            
        }
    }

    ?>
    
</body>
</html>


     

 