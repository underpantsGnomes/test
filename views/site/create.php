<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SuperPremium */

$this->title = 'Create Super Premium';
$this->params['breadcrumbs'][] = ['label' => 'Super Premium', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="super-premium-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
