<?php 
    require('partials/header.php');
?>

    <h1>Tasks</h1>
    
    <form method="POST" action="/tasks">
        <input type="text" name='description' placeholder="Task Description">
        <button type="submit">Submit</button>
    </form>

    <ul>
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
    </ul>

<?php 
    require('partials/footer.php');
?>