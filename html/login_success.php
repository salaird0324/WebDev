<?php

    session_start();
    if(!session_is_registered(myusername)){
        header("location: /html/workHome.html");
    }
?>

<html>
        <head>
            <title>successLogin</title>
        </head>
    <body>
        <p>Successfull Login</p>
    </body>
</html>