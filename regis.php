<?php
    include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inputop.css">
    <title>Register</title>
</head>
<body>
    <div class="main">

        <div class="navbar">
            <ul>
                <li><a href="index.php">BACK</a></li>
            </ul>
        </div>

        <div class="isi">
        <form action="" method="post">

            <table>
                <tr>
                    <td>Username</td>
                <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" value="simpan" name="proses"></td>
                </tr>
            </table>
        </form>
        </div>

    </div>

<?php
    if(isset($_POST['proses'])){
        mysqli_query($conn,"insert into users set
        username = '$_POST[uname]',
        password = '$_POST[pass]',
        nama = '$_POST[name]'");

        echo "New user has Added";
        echo "<meta http-equiv=refresh content=1;URL='index.php'>";
    }
?>
</body>
</html>