<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'ข่าวประชาสัมพันธ์';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css');
$this->registerJsFile('https://code.jquery.com/jquery-3.6.0.min.js');
$this->registerJsFile('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js');
$this->registerJsFile('https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js');
$this->registerJsFile('@web/js/news-table.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<div class="site-news">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>แสดงข่าวประชาสัมพันธ์ต่าง ๆ ของโรงพยาบาล</p>

    <ul>
        <li><strong>15 พ.ค. 2566:</strong> ประกาศหยุดให้บริการบางแผนก</li>
        <li><strong>10 พ.ค. 2566:</strong> กำหนดการตรวจสุขภาพประจำปี</li>
        <li><strong>5 พ.ค. 2566:</strong> เชิญร่วมงานวันพยาบาล</li>
    </ul>
    <div class="container mt-4">
        <h4 class="mb-3">ข่าวประชาสัมพันธ์</h4>
        <table id="newsTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>หัวข้อ</th>
                    <th>วันที่</th>
                    <th>ประเภท</th>
                    <th>ดูรายละเอียด</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>เปิดให้บริการคลินิกใหม่</td>
                    <td>2025-05-20</td>
                    <td>ข่าวทั่วไป</td>
                    <td><a href="#">ดูเพิ่มเติม</a></td>
                </tr>
                <tr>
                    <td>งดให้บริการชั่วคราว</td>
                    <td>2025-05-15</td>
                    <td>ประกาศ</td>
                    <td><a href="#">ดูเพิ่มเติม</a></td>
                </tr>
                <!-- เพิ่มรายการเพิ่มเติม -->
            </tbody>
        </table>
    </div>
</div>