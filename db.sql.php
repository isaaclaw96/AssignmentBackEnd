<html>
    <body>
        <?php

    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbName = 'Day 9';
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    $getDB = mysqli_select_db($conn,$dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

    

?>
</body>
</html>