<?php
namespace mvc;

/**
 * Class Application
 * @package mvc
 */
class Application
{
    // Rotas que são permitidas, key => controller, values => actions
    const ROUTE = [
        'book' => [
            'index',
            'view'
        ]
    ];

    // arquivo da view que será carregado
    // /views/NOME_DO_CONTROLLER/NOME_DA_ACTION
    public $viewFile;

    // controle da action
    private function route()
    {
        $page = @$_GET['page'];
        $action = @$_GET['action'];

        if(array_key_exists($page, $this::ROUTE) && in_array($action, $this::ROUTE[$page]))
        {
            $class = "\\mvc\\controllers\\".ucwords(strtolower($page))."Controller";
            $controller = new $class;
            $controller->viewFile = "../views/$page/$action.php";
            $controller->{'action'.ucwords(strtolower($action))}();
        }
        else
        {
            // caso a requisição não esteja em ROUTE, 404.
            header("HTTP/1.1 404 Not Found");
            include("../views/error/404.php");
        }

    }

    // inicia a aplicação
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
