<?php
class User
{
    public $name;
    public $age;
    //runs when an object is created or instantialted
    public function __construct($name, $age)
    {
        // for this name and age to become this property we need to set it
        //magic constant and methods :: pre dfined methods that do certain things
        $this->name = $name;
        $this->age = $age;
        echo 'Class ' . __CLASS__ . ' intantiated <br/> ';
        // echo $this->age;
    }


    public function sayHello()
    {
        return $this->name . 'Says Hello';
    }

    //called when no other ref to a certain object
    //used for cleanup, closing connections
    public function __destruct()
    {
        echo '<br/> destrcut ran <br/>';
    }
}


$user = new User('Tolu', 20);
echo $user->name . ' is ' . $user->age . 'Years old';
echo "<br/>";
echo $user->sayHello();

echo "<br/>";


$user2 = new User('Pariola', 120);
echo $user2->name . ' is ' . $user2->age . 'Years old';
echo "<br/>";
echo $user2->sayHello();
