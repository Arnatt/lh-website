<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php
$this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', [
    'depends' => [\yii\bootstrap5\BootstrapAsset::class],
]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/loeih-logo.png', ['alt' => 'Logo', 'class' => 'logo']),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar navbar-expand-md']
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto'],
            'items' => [
                ['label' => 'หน้าแรก', 'url' => ['/site/index']],
                [
                    'label' => 'เกี่ยวกับโรงพยาบาล',
                    'items' => [
                        ['label' => 'ประวัติโรงพยาบาล', 'url' => ['/site/news']],
                        ['label' => 'คณะผู้บริหาร', 'url' => ['/site/tender']],
                        ['label' => 'วิสัยทัศน์/พันธกิจ', 'url' => ['/about/vision']],
                        ['label' => 'ITA โรงพยาบาลเลย', 'url' => ['/site/job']],
                    ],
                ],
                [
                    'label' => 'ข่าวสาร-ประกาศ',
                    'items' => [
                        ['label' => 'ประชาสัมพันธ์', 'url' => ['/relation/news']],
                        ['label' => 'ประกวดราคา', 'url' => ['/relation/tender']],
                        ['label' => 'จัดซื้อจัดจ้าง', 'url' => ['/relation/purchase']],
                        ['label' => 'รับสมัครงาน', 'url' => ['/relation/job']],
                    ],
                ],
                [
                    'label' => 'การบริการ',
                    'items' => [
                        ['label' => 'ตารางการออกตรวจแพทย์', 'url' => ['/service/opdschedule']],
                        ['label' => 'ค่าห้องพิเศษ', 'url' => ['/service/viproom']],
                        [
                            'label' => 'Thai Care Cloud',
                            'url' => 'https://www.thaicarecloud.org/',
                            'linkOptions' => ['target' => '_blank'] // เปิดลิงก์ในแท็บใหม่
                        ],

                    ]
                ],
                ['label' => 'ติดต่อเรา', 'url' => ['/site/contact']],

                // Yii::$app->user->isGuest
                // ? ['label' => 'Login', 'url' => ['/site/login']]
                // : '<li class="nav-item">'
                // . Html::beginForm(['/site/logout'])
                // . Html::submitButton(
                //     'Logout (' . Yii::$app->user->identity->username . ')',
                //     ['class' => 'nav-link btn btn-link logout']
                // )
                // . Html::endForm()
                // . '</li>'
            ]
        ]);
        NavBar::end();
        ?>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <?= Breadcrumbs::widget([
                    'homeLink' => ['label' => 'หน้าแรก', 'url' => Yii::$app->homeUrl],
                    'links' => $this->params['breadcrumbs']
                ]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>


    <?= $this->render('footer') ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>