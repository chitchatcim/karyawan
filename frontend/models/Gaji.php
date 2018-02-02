<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gaji".
 *
 * @property string $golongan
 * @property integer $gaji_pokok
 * @property integer $tunjangan_gaji
 */
class Gaji extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gaji';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['golongan', 'gaji_pokok', 'tunjangan_gaji'], 'required'],
            [['gaji_pokok', 'tunjangan_gaji'], 'integer'],
            [['golongan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'golongan' => 'Golongan',
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan_gaji' => 'Tunjangan Gaji',
        ];
    }
}
