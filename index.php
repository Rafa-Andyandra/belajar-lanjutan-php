<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar list dengan PHP</title>
</head>
<body>
    <h2>
        daftar list dengan PHP
    </h2>
    <ul>
        <?php
        for($i=1; $i<=1000; $i++)
            {
            echo "<li>nama siswa ke-$i</li>";
            }
            ?>

    </ol>
</body>
</html>