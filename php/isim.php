<?php
header("content-type: text/plain");

if(isset($_GET["firstname"])){
$firstname = $_GET["firstname"];

if(isset($_GET["lastname"])){
    $lastname = $_GET["lastname"];

    echo "hello, {$firstname} " . strtoupper($lastname[0]) . " .!";
}
else{
    echo "hello , {$firstname} " . "!";
}
}

else{
echo "missing required firstname parameter";
}

?>