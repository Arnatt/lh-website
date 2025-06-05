<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'ติดต่อเรา';
$this->params['breadcrumbs'][] = $this->title;
$this->params['hideFooter'] = true;
$this->registerCssFile('@web/css/custom.css');
?>
<div class="site-contact">
    <div class="container my-5 contact-page-container">
        <h3 class="text-center mb-5 primary-color-text page-heading">ติดต่อเรา</h3>

        <div class="row align-items-stretch"> <div class="col-md-4 mb-4">
                <div class="contact-info-card shadow-sm p-4 rounded bg-light h-100"> <h5 class="mb-3 primary-color-text"><i class="bi bi-info-circle-fill me-2 primary-color-icon"></i>ข้อมูลการติดต่อ</h5>
                    <p class="contact-item"><i class="bi bi-geo-alt icon-secondary-color me-2"></i> โรงพยาบาลตัวอย่าง 123 ถ.สุขภาพดี อ.เมือง จ.สุขใจ 12345</p>
                    <p class="contact-item"><i class="bi bi-telephone icon-secondary-color me-2"></i> โทร: <a href="tel:021234567" class="text-decoration-none secondary-color-text">02-123-4567</a></p>
                    <p class="contact-item"><i class="bi bi-envelope icon-secondary-color me-2"></i> อีเมล: <a href="mailto:contact@hospital.go.th" class="text-decoration-none secondary-color-text">contact@hospital.go.th</a></p>
                    <p class="contact-item"><i class="bi bi-clock icon-secondary-color me-2"></i> เวลาทำการในเวลา: จันทร์ - ศุกร์ 8.30 - 16.30 น.</p>
                    <p class="contact-item"><i class="bi bi-clock icon-secondary-color me-2"></i> เวลาทำการนอกเวลา: จันทร์ - ศุกร์ 16.30 - 20.30 น.</p>
                </div>
            </div>

            <div class="col-md-8 mb-4">
                <div class="map-card shadow-sm p-4 rounded bg-white h-100"> <h5 class="mb-3 primary-color-text"><i class="bi bi-map-fill me-2 primary-color-icon"></i>แผนที่โรงพยาบาล</h5>
                    <div class="ratio ratio-16x9 map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.4156506747013!2d101.7200383751672!3d17.487660983416742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312147ecf1080365%3A0xff9a24007091b4ca!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4LmA4Lil4Lii!5e0!3m2!1sth!2sth!4v1749112928707!5m2!1sth!2sth"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="contact-form-card shadow-sm p-4 rounded bg-white mt-4">
                    <h5 class="mb-4 primary-color-text"><i class="bi bi-chat-dots-fill me-2 primary-color-icon"></i>ส่งข้อความถึงเรา</h5>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'กรอกชื่อของคุณ'])->label('ชื่อ') ?>

                        <?= $form->field($model, 'email')->input('email', ['placeholder' => 'you@example.com'])->label('อีเมล') ?>

                        <?= $form->field($model, 'subject')->textInput(['placeholder' => 'หัวข้อของข้อความ'])->label('หัวข้อ') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'พิมพ์ข้อความที่คุณต้องการส่ง...'])->label('ข้อความ') ?>

                        <div class="d-grid mt-4">
                            <?= Html::submitButton('ส่งข้อความ', ['class' => 'btn btn-primary-green btn-lg', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>>



    <!-- <div>
        <h3>โรงพยาบาลเลย</h3>

        <p>ที่อยู่</p>
        <p>เลขที่ 1 ถนนเลย-เชียงคาน ตำบลกุดป่อง อำเภอเมือง จังหวัดเลย 42000</p>
        <p>โทรศัพท์: 042-862-123</p>
        <p>แฟกซ์: 042-862-147</p>
    </div>
    <div>
        <div>
            <iframe
                class="lh-map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.4156506747013!2d101.7200383751672!3d17.487660983416742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x312147ecf1080365%3A0xff9a24007091b4ca!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4LmA4Lil4Lii!5e0!3m2!1sth!2sth!4v1748251061740!5m2!1sth!2sth"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div> -->




    <!-- <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div> -->

</div>