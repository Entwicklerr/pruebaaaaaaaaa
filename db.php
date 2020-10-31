<?php

session_start();

$conn = mysqli_connect (
    'localhost',
    'root',
    '',
    'crudbd'
);

if (isset($conn)){
    echo 'esta conectadaaaaaaaaaa';
}

?>