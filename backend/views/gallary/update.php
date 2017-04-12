<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gallary */

$this->title = 'Update Gallary: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gallaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
