<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EspecialidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Especialidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especialidades-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Especialidades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'Especialidades_id',
            'titulo',
            'SubTitulo',
            'texto:ntext',
            'Imagem',
            //'criado_em',
            //'atualizado_em',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->
    <div class="row">
        <?php foreach ($dataProvider->models as $model) {?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $model->Imagem; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $model->titulo; ?></h5>
                            <p class="card-text"><?php echo $model->SubTitulo; ?></p>
                            <a href="index.php?r=especialidades%2Fview&id=<?php echo $model->Especialidades_id; ?>" class="btn btn-primary">Sobre</a>
                        </div>
                </div>
            </div>
        
        <?php } ?>
    </div>
</div>
