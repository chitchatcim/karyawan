<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\karyawan */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Karyawan',
]) . $model->nip;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Karyawans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nip, 'url' => ['view', 'id' => $model->nip]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="karyawan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
