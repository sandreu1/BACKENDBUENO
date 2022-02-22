<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etiqueta".
 *
 * @property int $id
 * @property string|null $formatoetiqueta
 * @property int $id_cliente
 *
 * @property Cliente $cliente
 */
class Etiqueta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etiqueta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['formatoetiqueta'], 'string'],
            [['id_cliente'], 'required'],
            [['id_cliente'], 'integer'],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['id_cliente' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'formatoetiqueta' => 'Formato de Etiqueta',
            'id_cliente' => 'Nombre del Cliente',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'id_cliente']);
    }
}
