<?php
#arrays - variable hat holds multiple value
/*
- Indexed
- Associatvie
- Multi Dimensional

*/


//Indexed
$people = array('Kelvin', 'Jeremy', 'Sara');
$ids = array(23, 39, 34);
$cars = ['Honda', 'Toyota', 'Ford'];

$cars[3] = 'Chevy';
$caars[] = 'BMW';

//count($cars);
print_r($cars); #echos array
var_dump($cars); #type of arrays/ details of the varaible and no of characters
echo $people[1];

// Asscocative Array
$people = array('Brad' => 35, "Jame" => 32, "William" => 37);
echo $people['Brad'];

$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'VV'];
echo $ids[22];
$people['Jili'] = 42;


///Multi-Dimensional

$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 20, 10),
    array('Ford', 20, 10),
    array('Bens', 20, 10),
);

echo $cars[1][0];
