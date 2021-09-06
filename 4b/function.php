<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "dumbways";
$conn = mysqli_connect($host, $user, $pwd, $db);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>