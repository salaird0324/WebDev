<?php


    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "USERS";
    $tbl_name = "newUser";

    print_r();



  $conn = mysqli_connect($host, $username, $password, $db_name);
    if(!conn){
        echo "not connected";
    }
  
    
   


    $myusername = $_POST["user"];
    $mypassword = $_POST["pass"];
    $testUser = "test";
    $testPass = "pass";
   




   if($myusername === $testUser && $mypassword === $testPass)
    {
       header ("Location: workHome.html");
        
    }
    else
    {
        echo " <script>
            alert('Incorrect username or password!');
            window.location.href='/WebDevFinal/html/index.html'
            </script>";
    }

    

   $conn->close();

  
?>





