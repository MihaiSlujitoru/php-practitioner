<?php 
    require('partials/header.php');
?>

    <h1>Submit Your Name</h1>

    <form method="POST" action="/names">
        <input type="text" name='name' placeholder="Name">
        <button type="submit">Submit</button>
    </form>

    <h2>Submited Names</h2>
    <ul>
        <?php foreach($users as $user) : ?>
            <li><?= $user->name ?></li>
        <?php endforeach; ?>
    </ul>
    
<?php 
    require('partials/footer.php');
?>