<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'ค่าห้องพิเศษ';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="viproom">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?= Html::img('@web/images/viproom_price.png', [
        'alt' => 'VIP Room Price',
        'class' => 'img-viproom img-fluid', // bootstrap 5
        'style' => 'max-width: 100%; height: auto;'
    ]) ?>

</div>





