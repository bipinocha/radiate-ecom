<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seller_seller".
 *
 * @property integer $_id
 * @property string $seller
 */
class SellerSeller extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seller_seller';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seller'], 'required'],
            [['seller'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'Id'),
            'seller' => Yii::t('app', 'Seller'),
        ];
    }

    /**
     * @inheritdoc
     * @return SellerSellerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SellerSellerQuery(get_called_class());
    }
}
