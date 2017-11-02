<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>

<h2>Reservations</h2>
<?= GridView::widget([
    'dataProvider' => $reservationsDataProvider,
    'filterModel' => $reservationsSearchModel,
    'formatter' => [ 'class' => 'yii\i18n\Formatter', 'currencyCode' => 'EUR', ],
    'columns' => [
        'id',
        'room_id',
        'attribute' => 'customer.surname',
        'price_per_day:currency',        
        'date_from',
        'date_to'
    ],
]) ?>

<hr>

<h2>Rooms</h2>
<?= GridView::widget([
    'dataProvider' => $roomsDataProvider,
    'filterModel' => $roomsSearchModel,
    'columns' => [
        'id',
        'floor',
        'room_number',        
        'has_conditioner:boolean',
        'has_phone:boolean',
        'has_tv:boolean',
        'available_from',
    ],
]) ?>