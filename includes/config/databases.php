<?php

function conectarDB()
{
    $db = mysqli_connect('127.0.0.1', 'root', '',  'unlock');

    if ($db) {
        echo 'se conecto &gt';
    } else {
        echo 'no se conecto';
    }

    if (!$db) {
        echo 'Error, no se pudo conectar';
        exit;
    }

    return $db;
}
