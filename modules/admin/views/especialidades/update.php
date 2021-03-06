<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Especialidades */

$this->title = 'Update Especialidades: ' . $model->Especialidade_id;
$this->params['breadcrumbs'][] = ['label' => 'Especialidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Especialidade_id, 'url' => ['view', 'id' => $model->Especialidade_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="especialidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
