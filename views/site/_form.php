<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\SuperPremium */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="super-premium-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'manager')->textInput() ?>

    <?= $form->field($model, 'client')->textInput() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cityId')->textInput() ?>

    <?= $form->field($model,'date')->widget(DatePicker::className()) ?>

    <?= $form->field($model, 'comm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sellerPhone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
