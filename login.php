<?php
session_start();
$connect= mysqli_connect("localhost","id21287486_usergetip","Getip@123","id21287486_getip");

// if (!$connect) {


//     echo "connection failed please try later";
//     # code...
// }
if (isset($_POST['Login'])) 
{

    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    // SQL query to check if the provided username and password match a user in the database    
        $sql="SELECT * FROM student where fullname='$fullname' AND password='$password'";
        $result=mysqli_query($connect,$sql);
                
        if (mysqli_num_rows($result)===1) 
        {
            $row=mysqli_fetch_assoc($result);
            
                    echo "Login successful! Welcome, " . htmlspecialchars($fullname);
                
                # code...
                        // Login successful
            
            // You can set session variables here for user authentication
        }
         else 
        {   echo "Login failed. Please check your username and password.";
			$ipaddress=getenv('REMOTE_ADDR');
            $sql = "INSERT INTO `getip` (`ip_address`) VALUES ('$ipaddress')";

            if ($connect->query($sql) === TRUE) {
                echo "IP address '$ipaddress' has been stored in the database.";
            } else {
                echo "Error: " . $sql . "<br>" . $connect->error;
            }
            // Login failed
        }
                  
        
  }  

    

