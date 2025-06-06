<?php 
namespace app\controllers\about;

use yii\web\Controller;

class VisionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
