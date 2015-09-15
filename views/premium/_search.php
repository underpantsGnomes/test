<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuperPremiumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="super-premium-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'manager') ?>

    <?= $form->field($model, 'client') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'cityId') ?>

    <?= $form->field($model, 'Last Name') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'comm') ?>

    <?php // echo $form->field($model, 'shop') ?>

    <?php // echo $form->field($model, 'seller') ?>

    <?php // echo $form->field($model, 'sellerPhone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
