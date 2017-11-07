<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Meetup */

$this->title = 'Create Meetup';
$this->params['breadcrumbs'][] = ['label' => 'Meetups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meetup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
