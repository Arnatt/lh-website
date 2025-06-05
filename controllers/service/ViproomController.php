<?php 
namespace app\controllers\service;

use yii\web\Controller;

class ViproomController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}