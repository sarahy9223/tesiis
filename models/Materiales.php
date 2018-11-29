<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materiales".
 *
 * @property int $idmat
 * @property string $nomMat
 * @property int $cantidad
 * @property string $unidad
 */
class Materiales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materiales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomMat'], 'required'],
            [['cantidad'], 'integer'],
            [['nomMat'], 'string', 'max' => 20],
            [['unidad'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmat' => 'Folio Material',
            'nomMat' => 'Nombre del Material',
            'cantidad' => 'Cantidad',
            'unidad' => 'Unidad',
        ];
    }
}
