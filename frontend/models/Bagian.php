<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bagian".
 *
 * @property string $kd_bagian
 * @property string $nama_bagian
 */
class Bagian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bagian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_bagian', 'nama_bagian'], 'required'],
            [['kd_bagian', 'nama_bagian'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_bagian' => 'Kd Bagian',
            'nama_bagian' => 'Nama Bagian',
        ];
    }
}
