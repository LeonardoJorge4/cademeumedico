<?php

namespace app\models;

use Yii;

class Email extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Email';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'e_mail'], 'required'],
            [['e_mail'], 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'id'),
            'nome' => Yii::t('app', 'nome'),
            'email' => Yii::t('app', 'email'),
        ];
    }
}