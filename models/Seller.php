<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seller".
 *
 * @property integer $_id
 * @property string $seller_name
 * @property string $seller_city
 * @property string $seller_email
 * @property string $seller_seller
 * @property integer $amazon
 * @property integer $flipkart
 * @property integer $snapdeal
 * @property integer $myntra
 * @property integer $shopclues
 */
class Seller extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seller';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seller_name', 'seller_email'], 'required'],
            [['seller_seller'], 'string'],
            [['amazon', 'flipkart', 'snapdeal', 'myntra', 'shopclues'], 'integer'],
            [['seller_name'], 'string', 'max' => 2000],
            [['seller_city', 'seller_email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'Id'),
            'seller_name' => Yii::t('app', 'Seller Name'),
            'seller_city' => Yii::t('app', 'Seller City'),
            'seller_email' => Yii::t('app', 'Seller Email'),
            'seller_seller' => Yii::t('app', 'Seller Seller'),
            'amazon' => Yii::t('app', 'Amazon'),
            'flipkart' => Yii::t('app', 'Flipkart'),
            'snapdeal' => Yii::t('app', 'Snapdeal'),
            'myntra' => Yii::t('app', 'Myntra'),
            'shopclues' => Yii::t('app', 'Shopclues'),
        ];
    }

    /**
     * @inheritdoc
     * @return SellerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SellerQuery(get_called_class());
    }
}
