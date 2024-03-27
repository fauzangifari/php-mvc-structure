<?php

namespace App\Controller;

use App\App\View;

class HomeController
{

    function index():void
    {
        $model = [
            "title" => "Hello World",
            "content" => "This is the content of the page"
        ];
        View::render("Home/index", $model);
    }

    function hello():void
    {
        echo "Hello from HomeController.hello\n";
    }

    function world():void
    {
        echo "Hello from HomeController.world\n";
    }

    function login():void
    {
        echo "Hello from HomeController.login\n";
    }

}