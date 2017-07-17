<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SellerSeller */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Seller Seller',
]) . $model->_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seller Sellers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => $model->_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="seller-seller-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
