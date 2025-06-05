<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'ตารางออกตรวจแพทย์';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="opd-schedule">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="text-center mb-4">
        <h1>ตารางออกตรวจแพทย์ โรงพยาบาลเลย</h1>

        <?= Html::img('@web/images/dr_schedule1.png', [
            'alt' => 'OPD Schedule',
            'class' => 'img-opd img-fluid', // bootstrap 5
            'style' => 'max-width: 100%; height: auto;'
        ]) ?>
        <?= Html::img('@web/images/dr_schedule2.png', [
            'alt' => 'OPD Schedule',
            'class' => 'img-opd img-fluid', // bootstrap 5
            'style' => 'max-width: 100%; height: auto;'
        ]) ?>
    </div>

</div>