<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\gaji */

$this->title = $model->golongan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gajis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gaji-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->golongan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->golongan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'golongan',
            'gaji_pokok',
            'tunjangan_gaji',
        ],
    ]) ?>

</div>
