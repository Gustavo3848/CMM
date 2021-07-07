<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Medico */

$this->title = $model->Nome;
$this->params['breadcrumbs'][] = ['label' => 'Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="medico-view">   
    <h1><?= Html::encode($this->title) ?></h1>
    <h4>CRM: <?php echo $model->CRM ?></h4>
    <div class="row">
        <div class="col-md-4">
        <img src="<?php echo $model->Imagem ?>" alt="">
        </div>
        <div class="col-md-8">
            <p><b>Email: </b><?php echo $model->email ?></p>
            <p><b>Endereço: </b><?php echo $model->Endereco ?>, <?php echo $model->Bairro ?></p>
            <p><b>Site: </b><?php echo $model->site ?></p>
        </div>

    </div>

    <h1>Especialidades</h1>
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
    <h1>Clínicas</h1>
    <div class="row">
        <?php foreach ($clinicas as $value) {?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $value['Imagem'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['Nome']; ?></h5>
                            <a href="index.php?r=clinica%2Fview&id=<?php echo $value['Clinica_id']; ?>" class="btn btn-primary">Sobre</a>
                        </div>
                </div>
            </div>
            
        <?php } ?>
    </div>
    <!-- <p>
        <?= Html::a('Update', ['update', 'id' => $model->Medico_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Medico_id], [
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
            'Medico_id',
            'CRM',
            'Nome',
            'Endereco',
            'Bairro',
            'ibge',
            'email:email',
            'tem_clinica',
            'site',
            'Imagem',
            'criado_em',
            'atualizado_em',
            'destaque',
            'status',
        ],
    ]) ?> -->

</div>
