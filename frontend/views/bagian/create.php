<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\bagian */

$this->title = Yii::t('app', 'Create Bagian');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bagians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bagian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
