<?php
function connect()
{
    $conn = mysqli_connect("localhost", "root", "", "arg-company");

    return $conn;
}

function query($sql)
{
    $conn = connect();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
