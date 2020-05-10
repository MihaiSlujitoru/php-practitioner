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
        <h1>Check Age:</h1>
        <?= checkAge(19) ? 'Come on in!' : 'You are not old enough!'; ?>
    </header>

</body>

</html>