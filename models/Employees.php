<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $name
 * @property string $bd
 * @property string $blood
 * @property string $cid
 * @property string $ex
 * @property string $sex
 * @property string $addr
 * @property string $tel
 * @property string $social
 * @property string $satatus
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'bd', 'blood', 'cid', 'ex', 'sex', 'addr', 'tel', 'social', 'satatus'], 'required'],
            [['sex'], 'string'],
            [['name', 'bd', 'ex', 'addr', 'tel', 'social', 'satatus'], 'string', 'max' => 255],
            [['blood'], 'string', 'max' => 2],
            [['cid'], 'string', 'max' => 13],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'bd' => 'Bd',
            'blood' => 'Blood',
            'cid' => 'Cid',
            'ex' => 'Ex',
            'sex' => 'Sex',
            'addr' => 'Addr',
            'tel' => 'Tel',
            'social' => 'Social',
            'satatus' => 'Satatus',
        ];
    }
}
