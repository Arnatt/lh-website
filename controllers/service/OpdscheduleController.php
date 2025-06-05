<?php 
namespace app\controllers\service;

use yii\web\Controller;

class OpdscheduleController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}