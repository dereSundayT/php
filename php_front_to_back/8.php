<?php
# DATE and Timestamp
echo date('d');  // Day
echo date('m');  // Month

/*
d  ::
m  ::
Y  ::
l  :: day of the week full


h // hour
i // minute
s // sec
a // am/pm
//Set Time Zone
date_default_timezone_set(''AMerica/New_York)
date('h:i:sa)
*/
// $timestamp = mktime(h,m,s,m,d,y);
date('m/d/Y h:i:sa', $timestamp);

//str to time
$timestamp2 = strtotime('7:00pm March 22 2016');
date('m/d/Y', $timestamp2);

$timestamp3 = strtotime('tommorow');
$timestamp3 = strtotime('next Sunday');
$timestamp3 = strtotime('+2 Months');
$timestamp3 = strtotime('+2 Days');
$timestamp3 = strtotime('+2 Years');

// formating of dates
// date,php on php.net
