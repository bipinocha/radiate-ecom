<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'uploaded_date') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'seller_name') ?>

    <?= $form->field($model, 'seller_email') ?>

    <?php // echo $form->field($model, 'sku_id') ?>

    <?php // echo $form->field($model, 'product_title') ?>

    <?php // echo $form->field($model, 'uploaded_on') ?>

    <?php // echo $form->field($model, 'createdon') ?>

    <?php // echo $form->field($model, 'city') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
