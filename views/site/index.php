<?php
use yii\bootstrap5\Tabs;
use yii\helpers\Html;// <<< **สำคัญ: เพิ่มบรรทัดนี้เข้ามา**

/** @var yii\web\View $this */

$this->registerJsFile('@web/js/custom-carousel.js', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerCssFile('@web/css/custom.css');
$this->title = 'โรงพยาบาลเลย';
?>
<div class="site-index">

    <!-- <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div> -->

    <div class="container mb-5">
        <div id="myCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img src="https://www.loeihospital.go.th/internet/uploads/0a44ca6cc9e8ef95aabbcb92ac1e563b.jpg"
                        class="d-block mx-auto carousel-image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.loeihospital.go.th/internet/photos/_fk40pMJ3mYlLFajSFpAE8/e6e17d013e427017a4d21f3b919ef5da.jpg"
                        class="d-block mx-auto carousel-image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.loeihospital.go.th/internet/photos/_fk40pMJ3mYlLFajSFpAE8/7a33967915d3ade4f040a66f38fc3174.jpg"
                        class="d-block mx-auto carousel-image" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2 opacity-75"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2 opacity-75"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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

        <div class="site-tab-section py-5">
            <div class="container">
                <h2 class="text-center mb-5 primary-color-text page-heading">
                    <i class="bi bi-newspaper me-3 primary-color-icon"></i>ข่าวสาร รอบ โรงพยาบาล
                </h2>

                <ul class="nav nav-pills custom-tabs justify-content-center mb-4" id="newsTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="news-tab" data-bs-toggle="tab" data-bs-target="#news"
                            type="button" role="tab" aria-controls="news" aria-selected="true">
                            <i class="bi bi-bullhorn me-2"></i>ข่าวประชาสัมพันธ์
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tenders-tab" data-bs-toggle="tab" data-bs-target="#tenders"
                            type="button" role="tab" aria-controls="tenders" aria-selected="false">
                            <i class="bi bi-gavel me-2"></i>ประกวดราคา
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="procurements-tab" data-bs-toggle="tab"
                            data-bs-target="#procurements" type="button" role="tab" aria-controls="procurements"
                            aria-selected="false">
                            <i class="bi bi-cart-fill me-2"></i>จัดซื้อจัดจ้าง
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs" type="button"
                            role="tab" aria-controls="jobs" aria-selected="false">
                            <i class="bi bi-person-workspace me-2"></i>รับสมัครงาน
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="newsTabContent">

                    <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                        <div class="list-group custom-news-list"> <a href="#"
                                class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-megaphone-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">ประกาศรายชื่อผู้มีสิทธิเข้ารับการคัดเลือกบุคลากร</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 1 มิถุนายน
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-megaphone-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">แจ้งกำหนดการฝึกอบรมบุคลากรด้านสุขภาพประจำปี</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 25 พฤษภาคม
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tenders" role="tabpanel" aria-labelledby="tenders-tab">
                        <div class="list-group custom-news-list">
                            <a href="#" class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">ประกาศประกวดราคาซื้อเครื่องตรวจคลื่นหัวใจ</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 30 พฤษภาคม
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-file-earmark-text-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">ประกาศประกวดราคาซื้อรถพยาบาลฉุกเฉิน</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 18 พฤษภาคม
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="procurements" role="tabpanel" aria-labelledby="procurements-tab">
                        <div class="list-group custom-news-list">
                            <a href="#" class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-basket-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">ประกาศผลการจัดซื้อเวชภัณฑ์ประจำเดือนพฤษภาคม</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 28 พฤษภาคม
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-basket-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">รายงานผลจัดจ้างบริการทำความสะอาดอาคาร</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 15 พฤษภาคม
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                        <div class="list-group custom-news-list">
                            <a href="#" class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-badge-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">รับสมัครพยาบาลวิชาชีพ จำนวน 3 อัตรา</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 3 มิถุนายน
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action custom-news-item">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-badge-fill custom-news-icon me-3"></i>
                                    <div>
                                        <h6 class="mb-1">รับสมัครเจ้าหน้าที่ IT (สัญญาจ้าง)</h6>
                                        <small class="text-muted"><i class="bi bi-calendar me-1"></i> 20 พฤษภาคม
                                            2568</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-5"> <a href="#" class="btn btn-primary-green btn-lg">
                        ดูทั้งหมด <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>