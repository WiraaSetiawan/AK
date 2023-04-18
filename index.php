<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   
    
<div class="flex items-center justify-center min-h-screen" style="background-image: url(Arknights.jpg); background-size: cover; position: absolute; width: 100%; height: 100%">
        <div class="rounded-lg px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Login</h3>
            <form action="login.php" method="post">
                <div class="mt-4">
                    <div>
                        <label class="block" for="email">Username<label>
                                <input type="text" name="uname" placeholder="Username" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                                <input type="password" name="password" placeholder="Password"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="button1">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                    </div>
                    <div class="flex items-baseline justify-between">
                        <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type="submit">Login</button>
                    </div>
                    <button class="w-full px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900"><a href="regis.php">Register</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>