<?php
//inheritance
class User
{
    protected $name;
    protected $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}



class Customer extends User
{
    //have access to User properties and method

    private $balance;

    public function __construct($name, $age, $balance)
    {
        //callling the parent clasee constrructor
        parent::__construct($name, $age);

        $this->balance = $balance;
    }



    public function pay($amount)
    {
        return $this->name . " paid $" . $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}


$customer1 = new Customer('John', 10, 50);
//echo $customer1->pay(100);
echo $customer1->getBalance();
