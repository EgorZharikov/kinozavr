<?php

namespace App\Kernel\View;

use App\Kernel\App;

class View
{
    public function page(string $name) :void
    {   
        $viewPath = APP_PATH . "/views/pages/$name.php";
        if (file_exists($viewPath)) {
            throw new \Exception("View $name not found");
        }
        
        extract(['view' => $this]);
        include_once APP_PATH . "/views/pages/$name.php";
    }

    public function component(string $name): void
    {
        include_once APP_PATH . "/views/components/$name.php";
    }
}