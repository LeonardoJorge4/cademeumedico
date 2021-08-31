<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\MedicosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medicos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Medico_id') ?>

    <?= $form->field($model, 'CRM') ?>

    <?= $form->field($model, 'Nome') ?>

    <?= $form->field($model, 'Telefone') ?>

    <?= $form->field($model, 'Endereco') ?>

    <?php // echo $form->field($model, 'Bairro') ?>

    <?php // echo $form->field($model, 'Cidade') ?>

    <?php // echo $form->field($model, 'UF') ?>

    <?php // echo $form->field($model, 'IBGE') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Desc_carreira') ?>

    <?php // echo $form->field($model, 'tem_clinica') ?>

    <?php // echo $form->field($model, 'Imagem') ?>

    <?php // echo $form->field($model, 'site') ?>

    <?php // echo $form->field($model, 'criado_em') ?>

    <?php // echo $form->field($model, 'atualizado_em') ?>

    <?php // echo $form->field($model, 'destaque') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
