   <?php
   $servername = "localhost";
   $username = "root"; // Change this if your MySQL username is different
   $password = "";     // Set your MySQL password here if you have one
   $dbname = "lms_herrada"; // Your database name

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully";
   $conn->close();
   