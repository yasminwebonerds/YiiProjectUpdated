<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Gallary */

$this->title = 'Create Gallary';
$this->params['breadcrumbs'][] = ['label' => 'Gallaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallary-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
