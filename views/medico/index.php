<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Médicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Medico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Medico_id',
            'CRM',
            'Nome',
            'Endereco',
            'Bairro',
            //'ibge',
            //'email:email',
            //'tem_clinica',
            //'site',
            'Imagem',
            //'criado_em',
            //'atualizado_em',
            //'destaque',
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
                            <h5 class="card-title"><?php echo $model->Nome; ?></h5>
                            <p class="card-text"><?php echo $model->CRM; ?></p>
                            <a href="index.php?r=medico%2Fview&id=<?php echo $model->Medico_id; ?>" class="btn btn-primary">Sobre</a>
                        </div>
                </div>
            </div>
        
        <?php } ?>
    </div>


</div>
