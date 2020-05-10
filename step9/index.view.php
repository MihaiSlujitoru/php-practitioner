<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step7</title>

    <style>
        header {
            background-color: #e3e3e3;
            text-align: left;
            padding: 1rem;
        }
    </style>
</head>

<body>

    <header>
        <h1>Todo:</h1>
        <ul>
            <li><strong>Title</strong>: <?= $task['title']; ?></li>
            <li><strong>Due</strong>: <?= $task['due']; ?></li>
            <li><strong>Completed</strong>: 
                <?php 
                    if($task['completed']) {
                        echo "&#9989;";
                    } else {
                        echo "Incomplete";
                    }
                ?>
            
            </li>
        </ul>
    </header>

</body>

</html>