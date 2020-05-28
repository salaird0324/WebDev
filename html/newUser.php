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
  
    
   


    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $myusername = $_POST["username"];
    $mypassword = $_POST["password"];
    $testUser = "test";
    $testPass = "pass";
    $x = 0;

    $select = "INSERT INTO newUser (first_name,last_name,user_name,pass) VALUES ('$firstname', '$lastname','$myusername', '$mypassword');";

    print $select;

  



    $sql = $conn->query($select);
    

    
    if(!$sql)
    {
        echo "nope" . $conn->error;
    } 
    else 
    {
      echo " <script>
            alert('User Successfully added!');
            window.location.href='/WebDevFinal/html/index.html'
            </script>";
   
        
    }



   $conn->close();

  
?>





































<!--

//    $conn= new mysqli("localhost", "root", "", "USERS", "3306");
//
//  
//
//    if($conn->connect_error){
//        die("Connection failed: " . $conn->connect_error . ':' . $conn->connect_error);
//    }
//    echo "connected Successfully";
//
//    $sql = "INSERT * INTO newUser(first_name, last_name, user_name, pass) VALUES ( '{$conn->real_escape_string($_POST['first_name'])}', '{$conn->real_escape_string($_POST['last_name'])}', '{$conn->real_escape_string($_POST['user_name'])}', '{$conn->real_escape_string($_POST['pass'])}'";
//
//    $insert = $conn->query($sql);
//
//    if ($insert) {
//        echo "success! row ID: {$conn->insert_id}");
//    } else {
//        die("Error: {$conn->error} : {$conn->error}");
//    }
//
//    $conn->close();

//    $conn = mysqli_connect($host, $username, $password) or die("cannot connect");
//    mysql_select_db("$db_name")or die("cannot select DB");
//
//    $firstName=$_POST['first_name'];
//    $lastName=$_POST['last_name'];
//    $myusername=$_POST['user_name'];
//    $mypassword=$_POST['pass'];
//
//    $myusername = stripslashes($myusername);
//    $mypassword = stripslashes($mypassword);
//    $myusername = mysql_real_escape_string($myusername);
//    $mypassword = mysql_real_escape_string($mypassword);
//    
////    $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and 
////          password='$mypassword'";
//      $sql = "INSERT * INTO $tbl_name (username,password) VALUES ('$myusername', '$mypassword')";
//
//    $count=mysql_num_rows($result);
//
//    if($count==1) {
//    session_register("myusername");
//    session_register("mypassword");
//    header("location:login_success.php");
//    }
//    else{
//        echo "wrong Username or Password";
//    }

?>-->
