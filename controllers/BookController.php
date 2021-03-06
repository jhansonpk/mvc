<?php
namespace mvc\controllers;

use mvc\Model;

/**
 * Class BookController
 * @package mvc\controllers
 */
class BookController
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
    }

    /**
     * @param $id
     */
    public function actionView($id)
    {
        $book = $this->model->getBook($id);
        include $this->viewFile;
    }
}
