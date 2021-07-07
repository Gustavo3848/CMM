<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClinicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clínicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinica-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Clinica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Clinica_id',
            'Nome',
            'CEP',
            'Endereco',
            'Bairro',
            //'Cidade',
            //'UF',
            //'ibge',
            'Imagem',
            //'email:email',
            //'telefone',
            //'criado_em',
            //'atualizado_em',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->
     <div class="row">
        <?php foreach ($dataProvider->models as $model) {?>
            <div class="col-md-4">
                <div class="card" >
                    <img src="<?php echo $model->Imagem; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $model->Nome; ?></h5>
                            <a href="index.php?r=clinica%2Fview&id=<?php echo $model->Clinica_id; ?>" class="btn btn-primary">Sobre</a>
                        </div>
                </div>
            </div>
        
        <?php } ?>
    </div>


</div>
