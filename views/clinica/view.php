<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clinica */

$this->title = $model->Nome;
$this->params['breadcrumbs'][] = ['label' => 'Clinicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clinica-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-4 ">
        <img  class="img-clinica" src="<?php echo $model->Imagem ?>" alt="">
        </div>
        <div class="col-md-8">
            <p><b>Email: </b><?php echo $model->email ?></p>
            <p><b>Endereço: </b><?php echo $model->Endereco ?>, <?php echo $model->Bairro ?> - <?php echo $model->Cidade ?>/<?php echo $model->UF ?> CEP: <?php echo $model->CEP ?></p>
            <p><b>IBGE: </b><?php echo $model->ibge ?></p>
            <p><b>Telefone: </b><?php echo $model->telefone ?></p>
        </div>
    </div>
    <h1>Especialidades</h1>
    <hr>
    <div class="row">
        <?php foreach ($especialidades as $value) {?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $value['Imagem'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['titulo']; ?></h5>
                            <p class="card-text"><?php echo $value['SubTitulo']; ?></p>
                            <a href="index.php?r=especialidades%2Fview&id=<?php echo $value['Especialidades_id']; ?>" class="btn btn-primary">Sobre</a>
                        </div>
                </div>
            </div>
            
        <?php } ?>
    </div>
    <h1>Médicos</h1>
    <hr>
    <div class="row mb-3">
        <?php foreach ($medico as $value) {?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $value['Imagem'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['Nome']; ?></h5>
                            <p class="card-text"><b>CRM: </b><?php echo $value['CRM']; ?></p>
                            <a href="index.php?r=medico%2Fview&id=<?php echo $value['Medico_id']; ?>" class="btn btn-primary">Sobre</a>
                        </div>
                </div>
            </div>
            
        <?php } ?>
    </div>
    <!-- <p>
        <?= Html::a('Update', ['update', 'id' => $model->Clinica_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Clinica_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Clinica_id',
            'Nome',
            'CEP',
            'Endereco',
            'Bairro',
            'Cidade',
            'UF',
            'ibge',
            'Imagem',
            'email:email',
            'telefone',
            'criado_em',
            'atualizado_em',
            'status',
        ],
    ]) ?> -->
   
</div>
