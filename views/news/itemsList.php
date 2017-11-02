<?php 
/*
    $newsList = [
        [ 'title' => 'First World War', 'date' => '1914-07-28' ],
        [ 'title' => 'Second World War', 'date' => '1939-09-01' ],
        [ 'title' => 'First man on the moon', 'date' => '1969-07-20' ]
    ];
*/
?>
<?php echo $this->context->renderPartial('_copyright'); ?>

<table class="table table-responsive table-striped">
    <tr>
        <th>Title</th>
        <th>Date</th>
    </tr>
    <?php foreach($newsList as $item) { ?>
    <tr>
        <th><?php echo $item['title'] ?></th>
        <th><?php echo $item['date'] ?></th>
    </tr>
    <?php } ?>
</table>

<hr>

<?php  // $newsList is from actionItemsList ?>
<table class="table table-responsive table-striped">
    <tr>
        <th>Title</th>
        <th>Date</th>
    </tr>
    <?php foreach($newsList as $item) { ?>
    <tr>
        <th><a href="<?php echo Yii::$app->urlManager->createUrl(['news/item-detail' , 'title' => $item['title']]) ?>"><?php echo $item['title'] ?></a></th>
        <th><?php echo $item['date'] ?></th>
    </tr>
    <?php } ?>
</table>

