<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uploaded_date')->textInput() ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seller_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seller_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sku_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uploaded_on')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdon')->textInput() ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
