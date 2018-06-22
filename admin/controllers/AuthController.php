<?php
namespace admin\controllers;

use admin\models\auth\LoginForm;
use ua\web\Controller;
use Yii;

/**
 * AuthController
 *
 * @author ReSoul <roberts.mark1985@gmail.com>
 * @ver 0.33
 * @since 0.1
 */
class AuthController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $model = new LoginForm;

        if($model->load(Yii::$app->request->post())){
            return $this->redirect('/admin/main');
        }
        else{
            return $this->render('index');
        }
    }
}