<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Uploadexcel */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Uploadexcels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadexcel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'createdon',
            'brand',
            'filename',
            'status',
            'merchant_id',
            'merchant_name',
        ],
    ]) ?>

</div>
