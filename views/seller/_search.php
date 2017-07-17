<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SellerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seller-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'seller_name') ?>

    <?= $form->field($model, 'seller_city') ?>

    <?= $form->field($model, 'seller_email') ?>

    <?= $form->field($model, 'seller_seller') ?>

    <?php // echo $form->field($model, 'amazon') ?>

    <?php // echo $form->field($model, 'flipkart') ?>

    <?php // echo $form->field($model, 'snapdeal') ?>

    <?php // echo $form->field($model, 'myntra') ?>

    <?php // echo $form->field($model, 'shopclues') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
