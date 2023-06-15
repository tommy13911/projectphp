<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link rel="stylesheet" href="assets/style.css?ver=<?= time(); ?>">
</head>
<body>
    <header>
        <?php include('sections/header.php'); ?>
    </header>
    <main>
        <aside>

        </aside>
        <article>
            <?php include('sections/content.php'); ?>
        </article>
    </main>
    <footer>

    </footer>
</body>
</html>


<?php
