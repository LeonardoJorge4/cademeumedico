<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico".
 *
 * @property int $Medico_id
 * @property string $CRM
 * @property string|null $Nome
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property int|null $ibge
 * @property string|null $email
 * @property int|null $tem_clinica
 * @property string|null $site
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string $atualizado_em
 * @property int $status
 */
class Medicos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CRM'], 'required'],
            [['tem_clinica', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['CRM'], 'string', 'max' => 18],
            [['Nome', 'Email'], 'string', 'max' => 80],
            [['Endereco', 'site', 'Imagem'], 'string', 'max' => 145],
            [['Bairro', 'Cidade', 'UF'], 'string', 'max' => 60],
            [['CRM'], 'unique'],
            [['Telefone'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Medico_id' => Yii::t('app', 'Medico ID'),
            'CRM' => Yii::t('app', 'Crm'),
            'Nome' => Yii::t('app', 'Nome'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'Email' => Yii::t('app', 'Email'),
            'tem_clinica' => Yii::t('app', 'Tem Clinica'),
            'site' => Yii::t('app', 'Site'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public function destaque($flag = 1)
    {
        $this->andFilterWhere(['=', 'medico.destaque', $flag]);
        return $this;
    }

    public function status($flag = 1)
    {
        $this->andFilterWhere(['=', 'medico.status', $flag]);
        return $this;
    }

    public function getMedicoHasEspecialidades()
    {
        return $this->hasMany(MedicoHasEspecialidades::className(), ['Medico_id' => 'Medico_id']);
    }
}
