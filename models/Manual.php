<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manual".
 *
 * @property int $idman
 * @property string $nomManual
 * @property string $descripcion
 * @property int $edicion
 */
class Manual extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manual';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edicion'], 'integer'],
            [['nomManual'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idman'         => 'Id manual',
            'nomManual'     => 'Nombre del Manual',
            'descripcion'   => 'Descripcion',
            'edicion'       => 'Edicion',
        ];
    }
}
