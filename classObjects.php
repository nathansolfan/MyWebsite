<?php
// classes and objects -> we use -> on objects 
// steps: 1 Name class,2 give it a type,3 and properties like variable and function
// 4 create object, 5 - echo the function, 6 create __construct, 7 $this->email,name
// 8 echo $userOne->email for example 
class User {
    // define properties or functions
    // what type, public or private, public means we can change it outside
    private $name;
    private $email;

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
// GETTERS AND SETTERS
// function to get name
    public function getName(){
        // we have access to $this object and we grab the name 
        return $this->name;
    }

// function to set name - SETTER

public function setName($name){
    // we have a basic validiation, if string and length > 1
    if(is_string($name) ?? strlen($name) > 1){
        // access name inside class with $this->name
        $this->name = $name;
        return "name has been updated to $name";
    } else {
        return "name is not valid";
    }
}

    // 3-4min video 42
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
// we can overwrite the name var, no validation

// // since we changed to private, it fails
// $userTwo->name = 'Mario';
// echo $userTwo->name;
// echo $userTwo->email;

// this works
// $userTwo->login()


// we comment it out and the other step to echo the name:
// to do so we do $userTwo-> then the function getName()
echo $userTwo->getName();
echo $userTwo->setName(50);


?>