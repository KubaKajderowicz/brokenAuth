<?php

include "db.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars($_POST["password"]);
    $myConn = new DB;

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";

    $result = $myConn->executeSQL($query);

    
    if (!empty($result)) { 
        echo "<br> Login as $email <br>";
        // print_r print data uit dat voor normale mensen leesbaar is
    } else {
        echo "<br> Invalid login! <br>";
    }
} else {
    exit("Niet alle velden zijn ingevuld.");
}
