<?php
$kon = mysqli_connect("localhost", "root", "", "operator");

$result = mysqli_query($kon, "SELECT * FROM operator");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Operator</title>
    <link rel="stylesheet" type="text/css" href="opera.css">
</head>
<body>

<div class="main">
    <div class="navbar">
        <ul>
            <li><a href="home.php">BACK</a></li>
            <li><a href="event.html">Event</a></li>
            <li><a href="str.html">Story</a></li>
        </ul>
    </div>

    <div class="tabel">
        <table border="1" cellpadding="10" cellspacing="0" width="85%">
            <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>Codename</th>
                <th>Class</th>
                <th>Subclass</th>
                <th>Rarity</th>
                <th>Detail</th>
                <th>Delete</th>
                <th>Update</th>
                </tr>

            <?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row["id"]; ?></td>
                <td><img src="pic/<?= $row["gambar"]; ?>" width="50"></td>
                <td><?= $row["codename"]; ?></td>
                <td><?= $row["class"]; ?></td>
                <td><?= $row["subclass"]; ?></td>
                <td><?= $row["rarity"]; ?></td>
                <div class="btn"> 
                <td><a href="<?= $row["link"]; ?>"><button type="button">More</button></a></td>
                <?php 
                $id=$row["id"];
                ?>
                <td><a href="op.php?kode=<?php echo $id ?>" ><button> Delete </button></a></td>
                <td><a href="update.php?kode=<?php echo$id?>"><button> Update </button></a></td>
                </div>
            </tr>
            <?php endwhile; ?>
        </table>

        <?php
        if(isset($_GET['kode'])){
            $oid=$_GET['kode'];
            $del = mysqli_query($kon, "DELETE FROM operator WHERE id='$oid' ");

            if ($del){
                echo "Data $oid has Deleted";
                echo "<meta http-equiv=refresh content=2;URL='op.php'>";
            }
        }
        ?>

        <a href="inputop.php"><button>Input</button></a>
    </div>

    <div class="footer">
        <p>.</p>
    </div>
</div>

</body>
</html>