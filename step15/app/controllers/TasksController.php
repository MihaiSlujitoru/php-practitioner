<?php

namespace App\Controllers;

use App\Core\App;
class TasksController {
    
    public function index() {
        $tasks = App::get('database')->selectAll('tasks');
        return view('tasks', compact('tasks'));
    }

    public function store() {
        App::get('database')->insert('tasks', [
            'description'  => $_POST['description']
        ]);
        
        return redirect('tasks');

    }
}