<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\gaji */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Gaji',
]) . $model->golongan;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gajis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->golongan, 'url' => ['view', 'id' => $model->golongan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gaji-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
