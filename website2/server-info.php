<?php
# $_SERVER


//Create Server Array
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page'  => $_SERVER['PHP_SELF'],
    'SCRIPT NAME'  => $_SERVER['SCRIPT_NAME'],
    'Absolute Path'  => $_SERVER['SCRIPT_FILENAME'],


];




///Create Client Array
$client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP ' => $_SERVER['REMOTE_ADDR'],
    'Remote Path' => $_SERVER['SCRIPT_FILENAME']
]
?>

print_r($server)

echo $server['Host Server Name'];