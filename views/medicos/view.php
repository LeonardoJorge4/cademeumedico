<?php
use yii\helpers\Url;
use Da\QrCode\QrCode;

$this->title = "Card Dr. {$medico->Nome}";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-9">
        <div class="col-md-4">
            <img src="<?= $medico->Imagem ?>" class="img-responsive img-circle" alt="<?= $medico->Nome ?>">
        </div>
        <div class="col-md-8">
            <h1><?= $medico->Nome ?></h1>
            <p>Lorem ipsum placerat imperdiet habitasse quisque cubilia cursus tellus dapibus, tempus himenaeos tempus dictumst nec urna magna sociosqu. maecenas primis arcu morbi sociosqu arcu feugiat et facilisis in phasellus aliquam, ullamcorper per turpis pulvinar eros molestie per sem rhoncus vel, vehicula etiam accumsan aenean congue blandit donec eu duis massa. </p>     
            <div class="col-md-6">
                <h2>Dados</h2>
                <ul>
                    <li><?= $medico->CRM ?></li>
                    <li><?= $medico->email ?></li>
                    <li><?= $medico->Endereco ?></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Clinicas</h2>
                <ul>
                    <?php foreach($medico->medicoHasEspecialidades as $key => $clinicas): ?>
                        <?php $auxClinica[$clinicas->clinica->Clinica_id]['Nome'] = $clinicas->clinica->Nome ?>
                        <?php $auxClinica[$clinicas->clinica->Clinica_id]['id'] = $clinicas->clinica->Clinica_id ?>
                    <?php endforeach; ?>

                    <?php foreach($auxClinica as $key => $clinica): ?>
                        <li><?= $clinica['Nome']?></li>
                    <?php endforeach; ?>
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
    <?php foreach($medico->medicoHasEspecialidades as $key => $especialidade): ?>
        <div class="col-lg-4">
            <img src="<?= $especialidade->Especialidades->Imagem; ?>" class="img-responsive" alt="<?= $especialidade->Especialidades->Titulo; ?>" />
            <h2><?= $especialidade->Especialidades->Titulo; ?></h2>
            <?= $especialidade->Especialidades->SubTitulo; ?>
            <p><a class="btn btn-primary" href="<?= Url::to('especialidades/view') ?>" role="button">Ver Detalhes >></a></p>
        </div>
        <?php if((++$key > 0) and ($key % 3 == 0)): ?>
        </div>
        <hr>
        <div class="row">
        <?php endif; ?>   
    <?php endforeach; ?>
</div>