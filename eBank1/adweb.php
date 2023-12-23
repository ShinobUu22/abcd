<!DOCTYPE html>
<html>
    <head>
      <title>Admin</title>

      <link rel="stylesheet" type="text/css" href="Style.css">

      <div class="topnav">

        
        
        <a href="Customers.php">Customers View</a>
        <a href="Delect_account.php">Delete Account</a>

        <a id="logout" href="Login.php">Log out</a>
       
      </div>

      <br>

      

      <center><h1>Himalaya Bank Ltd.</h1></center>

      <br>

    </head>
    <body>

    </body>
</html>
<?php

  
  
  

   $host = "localhost";
   $dbusername = "root";
   $dbpassword = "";
   $dbname = "formfillup";
    
   $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

   if (mysqli_connect_error()){

        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());

   }

  
    

    $sql2 = "SELECT * FROM pms WHERE Contact='9866265700'";

    

    $result = mysqli_query($conn, $sql2);

    

    if (mysqli_num_rows($result) ==1) {

       
        $sql = "SELECT * FROM pms WHERE Contact='9866265700'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
               

           

                echo " <h3><br> Admin: " . $row["Name"]. "<br> ";
                echo "   Contact no: " . $row["Contact"]. "<br>";
                echo "  Email: " . $row["Email"]. "<br><br></h3>";



               
            }

        } 
       
    }

    
?>
<!DOCTYPE html>
<html>
  <head>

    <title></title>

  </head>
  <body>

    <center>
        
        <br>
        <br>
        <br>
        <i><p> POWERED BY </p></i>
        <b><p>Saphin & Avash </p></b>

</center>
    


  </body>
</html>