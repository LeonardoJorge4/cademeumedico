<?php
/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = "Medicos";
$this->params['breadcrumbs'][] = $this->title;

?>

<h1>Médicos</h1>

<div class="row">
  <?php foreach ($medicos as $key => $linha):?>
      <div class="col-lg-3 text-center">
        <img src="<?php echo $linha->Imagem?>" class="img-responsive img-circle" alt="<?php echo $linha->Nome?>">
        <h2><?php echo $linha->Nome?></h2>
          <p>
            CRM: <?php echo $linha->CRM?> <br>
            E-mail: <?php echo $linha->email?><br>
          </p>
          
        <p><a class="btn btn-primary" href="<?= Url::toRoute(['medicos/view', 'id' => $linha->Medico_id]) ?>" role="button">Ver Detalhes »</a></p>
      </div>
      <?php if((++$key > 0)  and ($key % 3 == 0)):?>
        </div>
        <hr>  
        <div class="row">
      <?php endif;?>
  <?php endforeach; ?>
</div>
<hr>