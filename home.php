<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="event.html">Event</a></li>
                <li><a href="op.php">Operator</a></li>
                <li><a href="str.html">Story</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>ARKNIGHTS WIKI</h1>
            <P>Welcome, Doctor <?php echo $_SESSION['nama']; ?></P>
            
            <div>
                <a href="https://www.facebook.com/ArknightsGlobal/"><button type="button"><span></span>Facebook</button></a>
                <a href="https://discordapp.com/invite/arknights"><button type="button"><span></span>Discord</button></a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>