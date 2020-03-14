<?php
error_reporting(E_ALL);
ini_set('displey_errors', 'on');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>index</title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                header<?php include 'div/1.php'; ?>
            </header>
            <main>
                <?php
                  $page = $_GET['page'];
                  $path = "pages/$page.php";
                
                if (file_exists($path)) {
                    include $path;
                } else {
                    echo 'file not found';
                }
                ?>
            </main>
            <footer>
                footer <?php echo date('Y'); require 'div/3.php' ?>
            </footer>
        </div>
    </body>
</html>
