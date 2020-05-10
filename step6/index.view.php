<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step6</title>

    <style>
        header {
            background-color: #e3e3e3;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>

<body>

    <header>
        <ul>
            <?php foreach ($names as $name) :  ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ul>


        <ul>
            <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
            ?>
        </ul>
    </header>

</body>

</html>