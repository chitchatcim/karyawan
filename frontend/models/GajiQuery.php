<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Gaji]].
 *
 * @see Gaji
 */
class GajiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Gaji[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Gaji|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
