<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Especialidades */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Especialidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="especialidades-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <h4><?php echo $model->SubTitulo; ?></h4>
    <!-- <p>
        <?= Html::a('Update', ['update', 'id' => $model->Especialidades_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Especialidades_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->
    <div class="row">
        <div class="col-md-4">
        <img src="<?php echo $model->Imagem ?>" alt="">
        </div>
        <div class="col-md-8">
            <p><?php echo $model->texto ?></p>
        
        </div>

    </div>
    <!-- <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Especialidades_id',
            'titulo',
            'SubTitulo',
            'texto:ntext',
            'Imagem',
            'criado_em',
            'atualizado_em',
            'status',
        ],
    ]) ?> -->

</div>
