<?php

if(!isset($_COOKIE["example_cookie"])) {
    setcookie(
        name: "example_cookie",
        value: "michi salvaje",
        expires: 0,
        path: "/",
        domain: "localhost",
        secure: false,
        httponly: true
    );
    
    echo "Cookie creada";
}

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>