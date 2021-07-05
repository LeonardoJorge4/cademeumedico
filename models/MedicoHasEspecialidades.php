<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico_has_Especialidades".
 *
 * @property int $Medico_id
 * @property int $Especialidades_id
 * @property int $Clinica_id
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $status
 *
 * @property Clinica $clinica
 * @property Especialidades $especialidades
 * @property Medico $medico
 */
class MedicoHasEspecialidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Medico_has_Especialidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Medico_id', 'Especialidades_id', 'Clinica_id', 'status'], 'required'],
            [['Medico_id', 'Especialidades_id', 'Clinica_id', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['Medico_id', 'Especialidades_id', 'Clinica_id'], 'unique', 'targetAttribute' => ['Medico_id', 'Especialidades_id', 'Clinica_id']],
            [['Clinica_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clinica::className(), 'targetAttribute' => ['Clinica_id' => 'Clinica_id']],
            [['Especialidades_id'], 'exist', 'skipOnError' => true, 'targetClass' => Especialidades::className(), 'targetAttribute' => ['Especialidades_id' => 'Especialidades_id']],
            [['Medico_id'], 'exist', 'skipOnError' => true, 'targetClass' => Medicos::className(), 'targetAttribute' => ['Medico_id' => 'Medico_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Medico_id' => Yii::t('app', 'Medico ID'),
            'Especialidades_id' => Yii::t('app', 'Especialidades ID'),
            'Clinica_id' => Yii::t('app', 'Clinica ID'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Clinica]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClinica()
    {
        return $this->hasOne(Clinica::className(), ['Clinica_id' => 'Clinica_id']);
    }

    /**
     * Gets query for [[Especialidades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecialidades()
    {
        return $this->hasOne(Especialidades::className(), ['Especialidades_id' => 'Especialidades_id']);
    }

    /**
     * Gets query for [[Medico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedico()
    {
        return $this->hasOne(Medicos::className(), ['Medico_id' => 'Medico_id']);
    }
}