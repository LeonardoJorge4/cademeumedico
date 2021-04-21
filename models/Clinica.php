<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clinica".
 *
 * @property int $Clinica_id
 * @property string $Nome
 * @property string|null $CEP
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property string|null $Cidade
 * @property string|null $UF
 * @property int|null $ibge
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $status
 */
class Clinica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clinica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Clinica_id', 'Nome'], 'required'],
            [['Clinica_id', 'ibge', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['Nome', 'Endereco', 'Cidade', 'Imagem'], 'string', 'max' => 145],
            [['CEP'], 'string', 'max' => 10],
            [['Bairro'], 'string', 'max' => 60],
            [['UF'], 'string', 'max' => 2],
            [['Clinica_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Clinica_id' => Yii::t('app', 'Clinica ID'),
            'Nome' => Yii::t('app', 'Nome'),
            'CEP' => Yii::t('app', 'Cep'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'Cidade' => Yii::t('app', 'Cidade'),
            'UF' => Yii::t('app', 'Uf'),
            'ibge' => Yii::t('app', 'Ibge'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}