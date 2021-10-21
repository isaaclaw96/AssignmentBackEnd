<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

    <?php
        include 'companydatabase.sql.php';
            $nameInput = $_POST['fname'];
            $ageInput = $_POST['age'];
            $userInput = $_POST['username'];
            $pwInput = $_POST['password'];

        $sql = "INSERT INTO employee (name,age)
            VALUES ('$nameInput',$ageInput)";

        $sql2 = "INSERT INTO emp_details(username,password)
            VALUES ($userInput,$pwInput)";

        

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        echo "<br>";

        $sql = "SELECT id, name, created_date FROM training";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["created_date"]. "<br>";
        }
        } else {
        echo "0 results";
        }
    ?>
    <form action="companyA.php" method="post">
    <button>Return</button>
    </form>
</body>
</html>