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
  
    
   


    $comment = $_POST["comment"];
    

    $select = "INSERT INTO comments (comments) VALUES ('$comment')";

    print $select;



    $sql = $conn->query($select);

    
    if(!$sql)
    {
        echo "nope" . $conn->error;
    } 
    else 
    {
      echo " <script>
            alert('Comment Successfully added! Thanks for using my page!');
            window.location.href='/WebDevFinal/backEnd/questions.html'
            </script>";
   
        
    }
				