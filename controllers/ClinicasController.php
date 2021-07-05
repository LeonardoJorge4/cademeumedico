<?php

namespace app\controllers;

use app\models\MedicoHasEspecialidades;
use app\models\Clinica;
use Da\QrCode\Format\MeCardFormat;
use Da\QrCode\QrCode;
use Yii;

class ClinicasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $clinicas = Clinica::find()->orderBy("Nome")->all();
        return $this->render('index',[
            'clinicas' => $clinicas
        ]);
    }

    public function actionView($id)
    {
        $clinica = Clinica::findOne($id);

        $format = new MeCardFormat();
        $format->firstName = $clinica->Nome;
        $format->email = $clinica->email;
        $format->note = $clinica->Cidade;
        $format->address = $clinica->Endereco . ", " . $clinica->Bairro;
        $format->phone = $clinica->telefone;

        $qrCode = (new QrCode($format))
        ->setSize(250)
        ->setMargin(5)
        ->useForegroundColor(0, 0, 0);

        $qrCode->writeFile(Yii::getAlias('@web') . "img/code/{$clinica->Clinica_id}-{$clinica->Nome}.png");

        return $this->render('view', [
            "clinica" => $clinica,
            "qrCode" => $qrCode->writeDataUri()
        ]);
    }

}