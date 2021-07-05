<?php

namespace app\controllers;

use app\models\MedicoHasEspecialidades;
use app\models\Medicos;
use Da\QrCode\Format\MeCardFormat;
use Da\QrCode\QrCode;
use Yii;

class MedicosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $medicos = Medicos::find()->orderBy('Nome')->all();
        return $this->render('index',[
            'medicos' => $medicos,
        ]);

    }

    public function actionView($id)
    {
        $medico = Medicos::findOne($id);

        $format = new MeCardFormat();
        $format->firstName = $medico->Nome;
        $format->email = $medico->email;
        $format->note = $medico->CRM;
        $format->address = $medico->Endereco . ", " . $medico->Bairro;
        $format->url = $medico->site;

        $qrCode = (new QrCode($format))
        ->setSize(250)
        ->setMargin(5)
        ->useForegroundColor(0, 0, 0);

        $qrCode->writeFile(Yii::getAlias('@web') . "img/code/{$medico->Medico_id}-{$medico->Nome}.png");

        return $this->render('view', [
            "medico" => $medico,
            "qrCode" => $qrCode->writeDataUri()
        ]);
    }

}
