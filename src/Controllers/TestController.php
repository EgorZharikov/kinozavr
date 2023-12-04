<?php
namespace App\Controllers;

class TestController
{
    public function index()
    {
        include_once APP_PATH . '/views/pages/test.php';
    }
}