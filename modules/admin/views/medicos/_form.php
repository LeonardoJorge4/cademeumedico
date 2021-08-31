<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Medicos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medicos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CRM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefone')->textInput() ?>

    <?= $form->field($model, 'Cidade')->textInput() ?>

    <?= $form->field($model, 'UF')->textInput() ?>

    <?= $form->field($model, 'Bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tem_clinica')->textInput() ?>

    <?= $form->field($model, 'Imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
