<?php

namespace App\Controllers;

use App\Core\View;

class Controller {
    public function __construct()
    {
        $this->index();
    }

    public function index()
    {
        return new View('home');
    }
}