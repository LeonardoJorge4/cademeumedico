<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Medicos;
use app\models\Clinica;
use app\models\Especialidades;


/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidades */
/* @var $form yii\widgets\ActiveForm */

$medicos = ArrayHelper::map(Medicos::find()->all(), 'Medico_id', 'Nome');
$especialidades = ArrayHelper::map(Especialidades::find()->all(), 'Especialidade_id', 'Titulo');
$clinicas = ArrayHelper::map(Clinica::find()->all(), 'Clinica_id', 'Nome');

?>

<div class="medico-has-especialidades-form">

    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Medico_id')->dropDownList($medicos, ['prompt' => 'Selecione o Médico']) ?>

    <?= $form->field($model, 'Especialidade_id')->dropDownList($especialidades, ['prompt' => 'Selecione a Especialidade']) ?>

    <?= $form->field($model, 'Clinica_id')->dropDownList($clinicas, ['prompt' => 'Selecione a Clínica']) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
