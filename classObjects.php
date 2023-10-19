<?php
// classes and objects -> we use -> on objects 
// steps: 1 Name class,2 give it a type,3 and properties like variable and function
// 4 create object, 5 - echo the function, 6 create __construct, 7 $this->email,name
// 8 echo $userOne->email for example 
class User {
    // define properties or functions
    // what type, public or private, public means we can change it outside
    public $name;
    public $email;

// to set up the properties, is a special function __construct and it can set up initial values
    public function __construct($name, $email){
        // $this is a reference to the object
        // 1st example 

        // $this->email = 'nathan@gmail.com';
        // $this->name = 'Nathan';

        // Using parameters
        $this->name = $name;
        $this->email = $email;
        
    }
    public function login(){
        echo $this->name;
        echo $this->email;
        echo 'User has done the login ';
    }
}

// we create a object based on the User class, new Keyword and invoke () the User
// since we give 2 parameters, this example needs 2 arguments. so we comment it out
// $userOne = new User();

// // to access properties and functions
// // to access the name, we use the object $userOne and -> name
// $userOne->login();
// echo $userOne->name;

// now with different users, we can set the initial values
// on this step we give 2 parameters to the constructor and name them here
$userTwo = new User('Yoshi','yoshi@gmail.com');
echo $userTwo->name;
echo $userTwo->email;
$userTwo->login()


?>