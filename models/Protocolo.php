<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "protocolo".
 *
 * @property int $idPro
 * @property string $nomPro
 * @property string $caracP
 * @property string $fechacread
 */
class Protocolo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'protocolo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fechacread'], 'safe'],
            [['nomPro', 'caracP'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPro'      => 'ID del Protocolo',
            'nomPro'     => 'Nombre del Protocolo',
            'caracP'     => 'Caracteristicas Principales',
            'fechacread' => 'Año de Creación',
        ];
    }
}
