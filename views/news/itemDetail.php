<?php // $item is from actionItemDetail

use yii\helpers\Url;
use yii\helpers\Html;
 ?>

<h2>News Item Detail</h2>
<br />
Title: <b><?php echo $item['title'] ?></b>
<br />
Date: <b><?php echo $item['date'] ?></b>
<br />
<br />
<?= Html::a('Back to list', ['news/items-list'], ['class' => 'btn btn-default']) ?>

