<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clinica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Clinica_id')->textInput() ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CEP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
