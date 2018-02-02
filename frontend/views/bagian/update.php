<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\bagian */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Bagian',
]) . $model->kd_bagian;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bagians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_bagian, 'url' => ['view', 'id' => $model->kd_bagian]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bagian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
