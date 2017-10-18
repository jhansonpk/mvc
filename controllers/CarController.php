<?php
namespace mvc\controllers;

use mvc\Model;
asdasdas
/**
 * Class BookController
 * @package mvc\controllers
 asdasdaasd
 */
class CarController
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();

    }


    public function actionIndex()
    {
        $books = $this->model->getBookList();
        include $this->viewFile;

        $lista = "isso";
    }

    /**
     * @param $id
     */
    public function actionView($id)
    {
        $book = $this->model->getBook($id);
        include $this->viewFile;
    }

    public function getModel()
    {
        // ....

        $menu = [
            'a',
            'b'
        ];
        $teste = ['a', 'c'];

    }
}
