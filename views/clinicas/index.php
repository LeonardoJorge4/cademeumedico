<?php
/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = "Clínicas";
$this->params['breadcrumbs'][] = $this->title;

?>

<h1>Clínicas</h1>
<p>
    Aqui você pode encontrar as principais clinicas
</p>
<div class="row">
  <?php foreach ($clinicas as $key => $linha):?>
      <div class="col-lg-4">
        <img src="/img/clinicas/clinica.jpg" class="img-responsive" alt="<?php echo $linha->Nome?>">
        <h2><?php echo $linha->Nome?></h2>
          <p>
            CEP: <?php echo $linha->CEP?> <br>
            Endereço: <?php echo $linha->Endereco?><br>
            Bairro: <?php echo $linha->Bairro?> <br>
            Cidade: <?php echo $linha->Cidade?> - <?php echo $linha->UF?> <br> 
            Email: <?= $linha->Email; ?> <br>
            Telefone: <?= $linha->Telefone; ?>
          </p>
        <p><a class="btn btn-primary" href="<?= Url::toRoute(['clinicas/view', 'id' => $linha->Clinica_id]) ?>" role="button">Ver Detalhes »</a></p>
      </div>
      <?php if((++$key > 0)  and ($key % 3 == 0)):?>
        </div>
        <hr>  
        <div class="row">
      <?php endif;?>
  <?php endforeach; ?>
</div>
<hr>