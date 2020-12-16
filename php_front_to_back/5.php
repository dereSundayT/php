<?php
# LOOPS = Execute code certain number of times
/*
For
While 
Do.. WHile
Foreach
*/

# For Loop
# @params - init , condition, incre

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

#Wile Loop
# @params - condition
$i = 0;
while ($i < 10) {
    echo $i;
    echo '<br/>';
    $i++;
}


# Do....While
// @params - condotiom
$i = 0;
do {
    echo $i;
    echo '<br/>';
    $i++;
} while ($i < 10);

//foreach :: arrays
$people = array('brand', 'Jose', 'Tolu');

foreach ($people as $person) {
    echo $person;
}

$people = array('brand' => 'dere@gmail.com', 'Jose' => "josw@gmail.com", 'Tolu' => "tolu@t,com");

foreach ($people as $person => $email) {
    echo $person . '' . $email;
}
