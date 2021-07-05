<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;
use app\models\Email;

class Emailmkt extends Widget
{
  public function run()
  {
    $model = new Email();

    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      Yii::$app->session->setFlash('success', 'Email Cadastrado com sucesso');
    } else {
      return $this->render('emailmkt', ['model' => $model]);
    }
  }
}