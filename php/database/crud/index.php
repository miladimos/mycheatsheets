<?php

$connection = new mysqli("localhost", "root", "", "learn");
$connection->set_charset("utf8");

if (isset($_GET['delete'])) {
    $deleteQuery = "DELETE FROM user_details WHERE `user_id` = {$_GET['delete']}";
    $result = $connection->query($deleteQuery);
    $allQuery = "SELECT * from user_details LIMIT 50";
    $result = $connection->query($allQuery);
} else if (isset($_GET['insert'])) {
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $query = "INSERT INTO user_details (username, first_name, last_name, gender, `status`, `password`) VALUES ($username, $fname, $lname, $gender, $status, $password)";
    $connection->query($query);
    $allQuery = "SELECT * from user_details LIMIT 50";
    $result = $connection->query($allQuery);
} else if (isset($_GET['update'])) {
    $username = $_GET['username'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $status = $_GET['status'];
    $gender = $_GET['gender'];
    $password = $_GET['password'];

    $query =  "UPDATE user_details SET username=$username, first_name=$fname, last_name=$lname, 'status'=$status, gender=$gender, 'password'=$password WHERE 'user_id' = {$_GET['update']}";
    $connection->query($query);
    $allQuery = "SELECT * from user_details LIMIT 50";
    $result = $connection->query($allQuery);
} else if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $query = "SELECT * FROM user_details WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%'";
    $result = $connection->query($query);
} else {
    $query = "SELECT * FROM user_details LIMIT 50";
    $result = $connection->query($query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Example</title>
    <style>
        * {
            font-family: Tahoma;
            font-size: 14px;
        }

        table {
            border: 1px solid blue;
            border-collapse: collapse;
        }

        th {
            width: 120px;
            padding: 5px;
            border: 1px black solid;
        }

        td {
            border: 1px black solid;
            padding: 5px;
            text-align: center;
        }

        a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: while;
            background-color: green;
            transition-duration: 0.4s;
        }

        a:hover {
            background-color: greenyellow;
        }

        .insert {
            width: 180px;
            height: 25px;
            padding: 10px;
            margin: 10px;
            font-size: 16px;
            font-weight: 600;
            float: right;
        }

        .update {
            background-color: yellow;
            width: 40px;
            height: 20px;
            padding: 5px;
            margin: 5px;
            font-weight: 600;
            float: right;
        }

        form {
            display: block;
            margin: 10px;
        }

        .search {
            height: 30px;
            width: 180px;
            font-size: 16px;
        }

        .button {
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: blue;
            font-size: 16px;
            border: none;
            height: 35px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>first name</th>
            <th>last name</th>
            <th>gender</th>
            <th>status</th>
            <th>actions</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['user_id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td>
                    <a href="update.php?update=<?php echo $row['user_id']?>" class="update">Update</a>
                    <a href="index.php?delete=<?php echo $row['user_id']?>" class="update">Delete</a>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
    <form action="index.php" method="get">
        <input type="search" name="search" class="search" />
        <input type="submit" class="button" value="Search ..." />
    </form>
    <a href="create.php" class="insert">
        New User
    </a>
</body>

</html>