<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uploadexcel".
 *
 * @property integer $_id
 * @property string $createdon
 * @property string $brand
 * @property string $filename
 * @property string $status
 * @property integer $merchant_id
 * @property string $merchant_name
 */
class Uploadexcel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uploadexcel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createdon'], 'safe'],
            //[['filename'], 'file', 'skipOnEmpty' => false, 'extensions' => 'csv'],
            [['filename'], 'file', 'skipOnEmpty' => false],
            [['brand', 'filename'], 'required'],
            [['merchant_id'], 'integer'],
            [['status'], 'string', 'max' => 255],
            [['merchant_name'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'Id'),
            'createdon' => Yii::t('app', 'Createdon'),
            'filename' => Yii::t('app', 'Filename'),
            'brand' => Yii::t('app', 'Brand'),
            'status' => Yii::t('app', 'Status'),
            'merchant_id' => Yii::t('app', 'Merchant ID'),
            'merchant_name' => Yii::t('app', 'Merchant Name'),
        ];
    }

    /**
     * @inheritdoc
     * @return UploadexcelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UploadexcelQuery(get_called_class());
    }

    public function upload()
     {

         if ($this->validate()) {
           $file= $this->filename->baseName."-".rand(100,9999).".".$this->filename->extension;
             $this->filename->saveAs('uploads/' . $file);
             return $file;
         } else {
             return false;
         }
     }
}
