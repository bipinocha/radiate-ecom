<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Uploadexcel */
if($seller!="")
$this->title = Yii::t('app', 'Upload Excel for '.$seller->seller_name);
else
$this->title = Yii::t('app', 'Upload Excel');

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Uploadexcels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uploadexcel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'seller'=>$seller
    ]) ?>

</div>
