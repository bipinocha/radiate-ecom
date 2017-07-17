<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SellerSeller */

$this->title = Yii::t('app', 'Create Seller Seller');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seller Sellers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seller-seller-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
