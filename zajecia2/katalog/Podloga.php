
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h4>Users</h4>
    <?php
       require_once "./connect.php";
       //echo $conn-> connect_errno;
       $sql = "SELECT * FROM `users`;";
       $result = $conn->query($sql);
       //$user = $result->fetch_assoc();
       //print_r($user);
        //echo $user["name"]."<hr>";

        while($user = $result->fetch_assoc())
        {
             echo <<< USERS
             Name and Surname: $user[name] $user[surname]<br>
             <hr>
             
            
             
 USERS;
        }
    ?>
</body>
</html>
