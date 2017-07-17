<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Uploadexcel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Uploadexcel',
]) . $model->_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Uploadexcels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => $model->_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="uploadexcel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
