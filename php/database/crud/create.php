<?php 
    $connection = new mysqli("localhost", "root", "", "learn");
    $connection->set_charset("utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
</head>
<body>
    <form action="index.php?insert=1" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input name="username" type="text" ></td>
            </tr>
            <tr>
                <td>First name</td>
                <td><input name="fname" type="text" ></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input name="lname" type="text" ></td>
            </tr>
            <tr>
                <td>status</td>
                <td>
                    <select name="status">
                        <option value="1">active</option>
                        <option value="0">inactive</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>gender</td>
                <td>
                    <select name="gender">
                        <option value="Male">male</option>
                        <option value="Female">female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td><input name="password" type="password" ></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>