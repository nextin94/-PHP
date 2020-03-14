<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>index</title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <?php include 'div/1.php'; ?>
            </header>
            <main>
                index
            </main>
            <footer>
                footer <?php echo date('Y'); require 'div/2.php' ?>
            </footer>
        </div>
    </body>
</html>
