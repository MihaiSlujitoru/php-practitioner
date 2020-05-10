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

    <?php foreach($tasks as $task) : ?>
        <li>
            <?php if($task->completed): ?>
                <strike>
                    <?= $task->description ?>
                </strike>
            <?php else: ?>
                <?= $task->description ?>
            <?php endif; ?>


        </li>
    <?php endforeach; ?>

</body>

</html>