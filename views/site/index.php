<?php

/** @var yii\web\View $this */

$this->registerJsFile('@web/js/custom-carousel.js', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerCssFile('@web/css/custom.css');
$this->title = 'โรงพยาบาลเลย';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img src="https://www.loeihospital.go.th/internet/uploads/0a44ca6cc9e8ef95aabbcb92ac1e563b.jpg"
                    class="d-inline-block carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.loeihospital.go.th/internet/photos/_fk40pMJ3mYlLFajSFpAE8/e6e17d013e427017a4d21f3b919ef5da.jpg"
                    class="d-inline-block carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.loeihospital.go.th/internet/photos/_fk40pMJ3mYlLFajSFpAE8/7a33967915d3ade4f040a66f38fc3174.jpg"
                    class="d-inline-block carousel-image" alt="...">
            </div>
        </div>
    </div>

    <!-- ปุ่มควบคุม -->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
    
</div>

<div class="body-content">


    <div class="row">
        <div class="col-lg-4 mb-3">
            <h2>Heading</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu
                fugiat nulla pariatur.</p>

            <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation
                    &raquo;</a></p>
        </div>
        <div class="col-lg-4 mb-3">
            <h2>Heading</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu
                fugiat nulla pariatur.</p>

            <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a>
            </p>
        </div>
        <div class="col-lg-4">
            <h2>Heading</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu
                fugiat nulla pariatur.</p>

            <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions
                    &raquo;</a></p>
        </div>
    </div>

</div>
</div>