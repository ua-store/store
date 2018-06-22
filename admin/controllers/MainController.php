<?php
namespace admin\controllers;

use ua\web\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}