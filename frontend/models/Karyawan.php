<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property integer $nip
 * @property string $nama
 * @property string $kd_bagian
 * @property string $alamat
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'kd_bagian', 'alamat'], 'required'],
            [['nip'], 'integer'],
            [['nama', 'kd_bagian', 'alamat'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama' => 'Nama',
            'kd_bagian' => 'Kd Bagian',
            'alamat' => 'Alamat',
        ];
    }
}
