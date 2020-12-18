<?php
# substr()
# Returns a portion of s string
$output = substr('Hello', 1, 3); # string,start, end

#strlen()
# Return the length of a string
$output = strlen('Hello World');
// echo $output;

#strpos()
# Finds the position of the first occurence of a string
$output = strpos('Hello  world', 'o');

#strrpos()
# Finds the position of the last occurence of a string
$output = strrpos('Hello  world', 'o');


#trim()
# Strip whitespace
$output = trim('Hello  world');
var_dump($output);
$trimmed = trim($output);

# strtoupper
#strtolower
# ucwords
#is_string($val)
#gzcompress()
   // compress string
//    gzuncompress()
