<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Uploadexcel]].
 *
 * @see Uploadexcel
 */
class UploadexcelQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Uploadexcel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Uploadexcel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
