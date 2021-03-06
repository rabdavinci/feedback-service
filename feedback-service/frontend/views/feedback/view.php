<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Feedback;
/* @var $this yii\web\View */
/* @var $model app\models\Feedback */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="feedback-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'user_id',
            'title',
            'text',
            [
              'attribute' => 'state',
              'value' => function($model) {
                  return $model->state == Feedback::STATE_IN_PROGRESS ? 'in progress' : 'com[pleted';
              }
            ],
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
