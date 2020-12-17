<?php
//conditionals
/*
==  identical
=== data types
<
>
<=
>=
!=
!==
*/
/*
$num = 5;
if($num == 5){
    echo '5 passed';
}elseif($num == 6){
    echo '6 passed';
}else{
    echo 'did not pass';
}
*/


# NESTING IF
if ($num > 4) {
    if ($num < 10) {
        echo "$num passed";
    }
}

/*
and &&
or ||
xor 
*/

if ($num > 4 and $num < 10) {
}

if ($num > 4 && $num < 10) {
}

if ($num > 4 or $num < 10) {
}

if ($num > 4 || $num < 10) {
}

if ($num > 4 xor $num < 10) {
    //one has to be true, buth not both
}


# switch
$favColor = 'red';
switch ($favColor) {
    case 'red':
        echo '';
        break;
    case 'blue':
        echo '';
        break;
    case 'green':
        echo '';
        break;
    case 'yelloe':
        echo '';
        break;
    default:
        echo '';
}
