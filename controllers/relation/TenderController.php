<?php 
namespace app\controllers\relation;

use yii\web\Controller;

class TenderController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}