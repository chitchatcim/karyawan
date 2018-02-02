<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\bagian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bagian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_bagian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bagian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
