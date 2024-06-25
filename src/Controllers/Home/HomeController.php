<?php 
namespace App\Controllers\Home;

use App\Controllers\MainController;

class HomeController extends MainController
{
    public function index()
    {
        $this->render('Home/index');
    }
}