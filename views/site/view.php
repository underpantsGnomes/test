<?php

use app\models\SuperPremium;

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuperPremium */

$this->title = '"' . $model->shop . '"';
$this->params['breadcrumbs'][] = ['label' => 'Super Premium', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$id = $model->id;
?>
<div class="super-premium-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <?= DetailView::widget([
        'model' => $model,
        ]) ?>

    <?php

    $model = new SuperPremium();
    $photos = $model->getPhotos($id);
    $photosString = null;
    foreach ($photos as $key => $value) {
        $photosString .= '<span class=""><img class="img-rounded col-lg-4" src="http://zoobonus.ua/images/superPremium/' . $value['photo'] . '"></span></span>';
    };
    echo $photosString;


    ?>
</div>
