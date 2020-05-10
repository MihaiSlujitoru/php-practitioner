<?php 

function dd($data) {
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function connectToDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'mihai', '*Mamatata12*');
    } catch(PDOException $e) {
        die($e->getMessage());
    }    
}


function fetchAllTasks($pdo) {
    $statement = $pdo->prepare("SELECT * FROM tasks");

    $statement->execute();
    
    
    return $statement->fetchAll(PDO::FETCH_CLASS, "Task");
    
    
}
