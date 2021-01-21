<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bar".
 *
 * @property int $bar_id
 * @property string|null $bra_name
 * @property string|null $bra_open
 * @property string|null $add_time
 */
class Bar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bra_name', 'add_time'], 'string', 'max' => 255],
            [['bra_open'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bar_id' => 'Bar ID',
            'bra_name' => '导航栏',
            'bra_open' => 'Bra Open',
            'add_time' => 'Add Time',
        ];
    }
}
