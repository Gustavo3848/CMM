<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MedicoHasEspecialidades */

$this->title = Yii::t('app', 'Create Medico Has Especialidades');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Medico Has Especialidades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-has-especialidades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
