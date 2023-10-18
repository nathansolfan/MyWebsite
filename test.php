<?php
// <!-- // functions -->
function SayOi(){
    echo "say hello hehe";
}
SayOi();

// <!-- // functions w/ parameter -->
function sayCiao( $nome ){
    echo "bye bye $nome";
}
sayCiao('mario');


// $product is a variable
// we have to wrap consts in {} -->

function price($product){
    return "{$product ['name']} costs {$product['price']} to buy";
};
$formated = price(['name' => 'goldstar', 'price' => '20']);
echo $formated;

// <!-- // functions where i assign standard properties aka name and time
// and once i Call the function i can give it my own inputs -->

function day($name = 'Eu', $time = "morning"){
    echo "It is $name and $time time";
};
day('nathan', 'afternoon');

// <!-- SCOPE -->

// <!-- // variable scope can trick - global and local
// local is like only inside the function  -->

function sayHola(){
    $name = "Mario";
    echo "hello $name";
}
sayHola();
// <!-- // above is a local example -->

$age = 30;
function sayBye(){
    global $age;
    echo "its time to go at $age";
}
sayBye();


// <!-- // if includes fail the rest of the code goes on, require it doesnt  -->
include('include.php');
require('include.php');
echo 'is this ok?';

include('content.php');


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

