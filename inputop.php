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
    <title>input</title>
</head>
<body>
    <div class="main">

        <div class="navbar">
            <ul>
                <li><a href="op.php">BACK</a></li>
            </ul>
        </div>

        <div class="isi">
        <form action="" method="post">

            <table>
                <tr>
                    <td>ID</td>
                <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Picture</td>
                    <td><input type="text" name="gambar"></td>
                </tr>
                <tr>
                    <td>Codename</td>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td><input type="text" name="class"></td>
                </tr>
                <tr>
                    <td>Subclass</td>
                    <td><input type="text" name="sub"></td>
                </tr>
                <tr>
                    <td>Rarity</td>
                    <td><input type="text" name="rarity"></td>
                </tr>
                <tr>
                    <td>Link</td>
                    <td><input type="text" name="link"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" value="Input" name="proses"></td>
                </tr>
            </table>
        </form>
        </div>

    </div>

<?php
    if(isset($_POST['proses'])){
        mysqli_query($conn,"insert into operator set
        id = '$_POST[id]',
        gambar = '$_POST[gambar]',
        codename = '$_POST[code]',
        class = '$_POST[class]',
        subclass = '$_POST[sub]',
        rarity = '$_POST[rarity]',
        link = '$_POST[link]'");

        echo "New Operator has Added";
        echo "<meta http-equiv=refresh content=1;URL='op.php'>";
    }
?>
</body>
</html>