<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\gaji */

$this->title = Yii::t('app', 'Create Gaji');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gajis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gaji-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
