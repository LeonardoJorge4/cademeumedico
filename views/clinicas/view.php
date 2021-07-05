<?php
use yii\helpers\Url;
use Da\QrCode\QrCode;

$this->title = "{$clinica->Nome}";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-9">
        <div class="col-md-4">
            <img src="<?= $clinica->Imagem ?>" class="img-responsive img-circle" alt="<?= $clinica->Nome ?>">
        </div>
        <div class="col-md-8">
            <h1><?= $clinica->Nome ?></h1>
            <p>Lorem ipsum placerat imperdiet habitasse quisque cubilia cursus tellus dapibus, tempus himenaeos tempus dictumst nec urna magna sociosqu. maecenas primis arcu morbi sociosqu arcu feugiat et facilisis in phasellus aliquam, ullamcorper per turpis pulvinar eros molestie per sem rhoncus vel, vehicula etiam accumsan aenean congue blandit donec eu duis massa. </p>
            <div class="col-md-6">
                <h2>Dados</h2>
                <ul>
                    <li>CEP: <?= $clinica->CEP ?></li>
                    <li>Endereço: <?= $clinica->Endereco ?></li>
                    <li>Bairro: <?= $clinica->Bairro ?></li>
                    <li>Cidade: <?= $clinica->Cidade ?></li>
                    <li>E-mail: <?= $clinica->email ?></li>
                    <li>Telefone: <?= $clinica->telefone ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <img src="<?= $qrCode ?>" class="img-responsive">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <h2>Especialidades</h2>
    </div>
    <?php $auxEspecialidades = []; ?>
    <?php foreach($clinica->medicoHasEspecialidades as $key => $especialidade): ?>
        <?php if(!in_array($especialidade->especialidades->Especialidades_id, $auxEspecialidades)):
            $auxEspecialidades[] = $especialidade->especialidades->Especialidades_id; ?>
            <div class="col-lg-4">
                <img src="<?= $especialidade->especialidades->Imagem; ?>" class="img-responsive" alt="<?= $especialidade->especialidades->titulo; ?>" />
                <h2><?= $especialidade->especialidades->titulo; ?></h2>
                <p><a class="btn btn-primary" href="<?= Url::to('especialidades/view') ?>" role="button">Ver Detalhes >></a></p>
            </div>
            <?php if((++$key > 0) and ($key % 3 == 0)): ?>
            </div>
            <hr>
            <div class="row">
            <?php endif; ?>   
        <?php endif; ?>    
    <?php endforeach; ?>
</div>
<div class="row">
<div class="col-md-12">
        <h2>Médicos</h2>
    </div>
    <?php $auxMedico = []; ?>
    <?php foreach($clinica->medicoHasEspecialidades as $key => $medicos): ?>
        <?php if(!in_array($medicos->medico->Medico_id, $auxMedico)):
            $auxMedico[] = $medicos->medico->Medico_id; ?>
            <div class="col-lg-4">
                <img src="<?= $medicos->medico->Imagem; ?>" class="img-responsive" alt="<?= $medicos->medico->Nome; ?>" />
                <h2><?= $medicos->medico->Nome; ?></h2>
                <p><a class="btn btn-primary" href="<?= Url::toRoute(['medicos/view', 'id' => $medicos->medico->Medico_id]) ?>" role="button">Ver Detalhes >></a></p>
            </div>
            <?php if((++$key > 0) and ($key % 3 == 0)): ?>
            </div>
            <hr>
            <div class="row">
            <?php endif; ?>
        <?php endif; ?>   
    <?php endforeach; ?>
</div>