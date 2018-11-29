<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fundador".
 *
 * @property int $idFund
 * @property string $nombFun
 * @property string $appatFun
 * @property string $apmatFun
 * @property string $sexoFun
 * @property string $nacionalidad
 */
class Fundador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fundador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombFun'], 'string', 'max' => 15],
            [['appatFun', 'apmatFun', 'nacionalidad'], 'string', 'max' => 20],
            [['sexoFun'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFund'       => 'Número de Fundador',
            'nombFun'      => 'Nombre(es)',
            'appatFun'     => 'Apellido Paterno',
            'apmatFun'     => 'Apellido Materno',
            'sexoFun'      => 'Sexo',
            'nacionalidad' => 'Nacionalidad',
        ];
    }
}
