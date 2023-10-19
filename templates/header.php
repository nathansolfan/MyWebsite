<!-- nr 36 min5 -->
<!-- null coalescing $name = $_SESSION['name'] ?? 'Guest ' -->
<?php 
// start session always go first
session_start();
// using the S_SERVER superglobal, QUERY_STRING is the thing after the url "?"
if($_SERVER['QUERY_STRING'] == 'noname'){
    unset($_SESSION['name']);
    // does the same thing as $_SESSION['name'] 
    session_unset();
// we get an error on the following $name
}
// we grab the S_SESSION superglobal and put it in the $name variable
$name = $_SESSION['name'] ?? "Guest";
// create cookie
$gender = $_COOKIE['gender'] ?? "Unknown";
?>

<head>
    <title>Nathan PHP</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
        }
        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>
<body class="blue lighten-4">
<nav class="white z-depth-0">
    <div class="container">
        <a href="index.php" class="brand-logo brand-text">Pizzas</a>
        <ul id="nav-mobile" class="right hide-on-small-and-down">
            <!-- we display the $name variable underneath -->
            <li class="grey text">Hello, <?php echo htmlspecialchars($name) ?></li>
            <li class="grey text"> (<?php echo htmlspecialchars($gender)?>) </li>
            <li><a href="add.php" class="btn brand-text z-depth-0">Add a pizza</a></li>
        </ul>
    </div>
</nav>