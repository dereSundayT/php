<?php
// Define a Class
class User
{
    //Properties (attribute) ::  user might have a name
    // public $name = 'Tolu';
    public $name;


    // Methods (Function)
    public function sayHello()
    {
        return $this->name . ' Says Hello';
    }
}


// Instantiate a user object from a user class
$user1 = new User();
$user1->name = "James";
echo $user1->name;
echo "<br/>";
echo $user1->sayHello();

echo "<br/>";
// create new user
$user2 = new User();
$user2->name = "Sewa";
echo $user2->name;
echo "<br/>";
echo $user2->sayHello();
