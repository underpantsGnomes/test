<?php

/* @var $this yii\web\View */
use yii\grid\GridView;
$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--    //--><?php //var_dump($dataProvider);?>
    <div class="body-content">
        <?php
        echo GridView::widget([
        'dataProvider' => $dataProvider,

        ]);
        ?>
    </div>
</div>
