<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\timeago\TimeAgo;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class = "row">
    <div class = "col-md-8 col-md-offset-2">
        <h1 class = "text-center"><?= Html::encode($this->title)?></h1>
        <hr>
        <?= $model->text?>
        <hr>
        <div class = "row">
            <div class = "col-xs-6">
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
            </div>
            <div class = "col xs-6">
                <div class ="text-right">
                <time class = "timeago badge" datetime =><?= TimeAgo::widget(['timestamp' => $model->updated_at]); ?></time>
                </div>
            </div>
        </div>
    </div>
</div>
