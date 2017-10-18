<?php
namespace mvc\controllers;

use mvc\Model;

/**
 * Class BookController
 * @package mvc\controllers
 */
class CarController
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();

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

        $teste = ['a', 'c'];
    }
}
