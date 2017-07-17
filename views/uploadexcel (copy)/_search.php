<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UploadexcelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadexcel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'createdon') ?>

    <?= $form->field($model, 'filename') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'merchant_id') ?>

    <?php // echo $form->field($model, 'merchant_name') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
