<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Uploadexcel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uploadexcel-form">

    <?php $form = ActiveForm::begin([
      'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'filename')->fileInput() ?>


    <?= $form->field($model, 'merchant_id')->hiddenInput(['value'=> $seller->_id])->label(false) ?>

    <?= $form->field($model, 'merchant_name')->hiddenInput(['value'=> $seller->seller_name])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Upload Data') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
