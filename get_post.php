<?php
if (isset($_GET['name'])) {
    echo $_GET['name'];
    print_r($_GET);
    $name =  htmlentities($_GET['name']);
}

if (isset($_POST['name'])) {
    echo $_POST['name'];
    print_r($_POST);
    $name =  htmlentities($_POST['name']);
}

if (isset($_REQUEST['name'])) {
    echo $_REQUEST['name'];
    print_r($_REQUEST);
    $name =  htmlentities($_REQUEST['name']);
}


echo $_SERVER['QUERY_STRING'];
echo "{$name}'s Profile";
