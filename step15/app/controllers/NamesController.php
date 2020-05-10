<?php

namespace App\Controllers;

use App\Core\App;
class NamesController {
    
    public function index() {
        $users = App::get('database')->selectAll('users');
        return view('contact', compact('users'));
    }

    public function store() {
        App::get('database')->insert('users', [
            'name'  => $_POST['name']
        ]);
        
        return redirect('contact');

    }
}