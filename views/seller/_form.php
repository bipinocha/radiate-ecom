<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Seller */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seller-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-sm-6 radiate" >
      <?= $form->field($model, 'seller_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-sm-6 radiate">
    <?= $form->field($model, 'seller_city')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-6 radiate">
    <?= $form->field($model, 'seller_email')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-sm-12">
    <div class="col-sm-2">
    <?= $form->field($model, 'amazon')->checkBox() ?>
  </div>
  <div class="col-sm-2">
    <?= $form->field($model, 'flipkart')->checkBox() ?>
  </div>
  <div class="col-sm-2">
    <?= $form->field($model, 'snapdeal')->checkBox() ?>
  </div>
  <div class="col-sm-2">
    <?= $form->field($model, 'myntra')->checkBox() ?>
  </div>
  <div class="col-sm-2">
    <?= $form->field($model, 'shopclues')->checkBox() ?>
  </div>
  </div>
  <div class="col-sm-12">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
  </div>
    <?php ActiveForm::end(); ?>

</div>
