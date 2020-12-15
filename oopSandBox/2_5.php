<?php
// access modifiers setter's and getter's
class User
{
    /**
     * Public :: u can access this anywhere,outside the class
     * Private :: only accessed inside the class
     * Protected :: within the class and any other class that extends it
     */
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    /// __get MAGIC METHOD
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // __set MAGIC MEthod
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
}


$user1 = new User('John', 40);

// echo $user1->setName('James');
// echo $user1->getName();


$user1->__set('age', 50);
echo $user1->__get('name');
echo $user1->__get('age');
