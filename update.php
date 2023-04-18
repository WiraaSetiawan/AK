<?php
    include "db_conn.php";

    $sql=mysqli_query($conn, "select * from operator where id='$_GET[kode]'");
    $data=mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inputop.css">
    <title>Update</title>
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
                <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Picture</td>
                    <td><input type="text" name="gambar" value="<?php echo $data['gambar']; ?>"></td>
                </tr>
                <tr>
                    <td>Codename</td>
                    <td><input type="text" name="code" value="<?php echo $data['codename']; ?>"></td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td><input type="text" name="class" value="<?php echo $data['class']; ?>"></td>
                </tr>
                <tr>
                    <td>Subclass</td>
                    <td><input type="text" name="sub" value="<?php echo $data['subclass']; ?>"></td>
                </tr>
                <tr>
                    <td>Rarity</td>
                    <td><input type="text" name="rarity" value="<?php echo $data['rarity']; ?>"></td>
                </tr>
                <tr>
                    <td>Link</td>
                    <td><input type="text" name="link" value="<?php echo $data['link']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" value="Update" name="proses"></td>
                </tr>
            </table>
        </form>
        </div>

    </div>

<?php
    if(isset($_POST['proses'])){
        mysqli_query($conn,"update operator set
        gambar = '$_POST[gambar]',
        codename = '$_POST[code]',
        class = '$_POST[class]',
        subclass = '$_POST[sub]',
        rarity = '$_POST[rarity]',
        link = '$_POST[link]'
        where id = '$_GET[kode]'");

        echo " Operator has updated";
        echo "<meta http-equiv=refresh content=1;URL='op.php'>";
    }
?>
</body>
</html>