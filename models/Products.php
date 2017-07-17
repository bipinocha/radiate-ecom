<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $_id
 * @property string $uploaded_date
 * @property string $seller_name
 * @property string $seller_email
 * @property string $sku_id
 * @property string $product_title
 * @property string $uploaded_on
 * @property string $createdon
 * @property string $city
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uploaded_date', 'seller_name', 'seller_email', 'sku_id', 'product_title', 'uploaded_on', 'city'], 'required'],
            [['uploaded_date', 'createdon'], 'safe'],
            [['seller_name'], 'string', 'max' => 2000],
            [['seller_email', 'sku_id', 'product_title', 'uploaded_on', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'Id'),
            'uploaded_date' => Yii::t('app', 'Uploaded Date'),
            'seller_name' => Yii::t('app', 'Seller Name'),
            'seller_email' => Yii::t('app', 'Seller Email'),
            'sku_id' => Yii::t('app', 'Sku ID'),
            'product_title' => Yii::t('app', 'Product Title'),
            'uploaded_on' => Yii::t('app', 'Uploaded On'),
            'createdon' => Yii::t('app', 'Createdon'),
            'city' => Yii::t('app', 'City'),
        ];
    }

    /**
     * @inheritdoc
     * @return ProductsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductsQuery(get_called_class());
    }
}
