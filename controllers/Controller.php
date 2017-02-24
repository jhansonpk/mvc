<?php
namespace controllers;

class Controller
{
	const ROUTE = [
	    'book' => [
	        'index',
            'view'
        ]
    ];

	public $viewFile;

    private function route()
    {
        $page = @$_GET['page'];
        $action = @$_GET['action'];

        if(array_key_exists($page, $this::ROUTE) && in_array($action, $this::ROUTE[$page]))
        {
            include "../controllers/".ucwords(strtolower($page))."Controller.php";

            $controller = new \controllers\BookController();
            $controller->viewFile = "../views/$page/$action.php";
            $controller->{'action'.ucwords(strtolower($action))}();
        }
        else
        {
            header("HTTP/1.1 404 Not Found");
            include("../views/error/404.php");
        }

    }
	
	public function run()
	{
        if (isset($_GET['page']))
        {
            $this->route();
        }
        else
        {
            include '../views/default.php';
        }
	}
}
