<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SellerSeller]].
 *
 * @see SellerSeller
 */
class SellerSellerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return SellerSeller[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SellerSeller|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
