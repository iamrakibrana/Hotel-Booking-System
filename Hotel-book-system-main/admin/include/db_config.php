<?php

$hname = 'localhost';
$uname = 'root';
$pass = '1234';
$db = 'hbwebsite';

$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con) {
    die("Cannot connect" . mysqli_connect_error());
}


// data filter function
function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);                     // remove extra spaces from input field
        $data[$key] = stripslashes($value);             // remove back slashes

        $data[$key] = strip_tags($value);               // remove html tag
        $data[$key] = htmlspecialchars($value);         // convet special chars (<, >, etc.) to html entity
    }
    return $data;
}


function select($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        die("Query cannot be executed - Select");
    }
}



function selectAll($table)
{
    $hname = 'localhost';
    $uname = 'root';
    $pass = '1234';
    $db = 'hbwebsite';

    // Initialize connection
    $con = mysqli_connect($hname, $uname, $pass, $db);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Build and execute query
    $query = "SELECT * FROM `$table`";
    $result = mysqli_query($con, $query);

    // Close the connection (this can be done after you're done with the result set)
    // $con->close();

    return $result;
}
