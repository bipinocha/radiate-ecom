<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SellerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sellers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seller-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Seller'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'_id',
            'seller_name',
            'seller_city',
            'seller_email:email',
//            'seller_seller:ntext',
            'amazon',
            'flipkart',
            'snapdeal',
            'myntra',
            'shopclues',
            [
              'label'=>'Upload Data',
              'format' => 'raw',
              'value'=>function ($data) {
              return Html::a('Upload Data',['uploadexcel/create','sellerid'=>$data->_id]);
              },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
