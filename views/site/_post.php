<?php

/* @var $model \app\models\Post*/


use yii\bootstrap\Html;
use yii\timeago\TimeAgo;

?>
<div class = "col-md-4">
    <div class= "panel panel-default">
        <div class = "panel-body">
            <h2 class = "truncate text-center"><?=Html::a($model->title,
                    ['post/view', 'id' => $model -> id])?></h2>
            <hr>
            <p><?=$model->preview?></p>
            <hr>
            <div class = "text-right">
                <p><time class = "timeago badge" datetime =><?= TimeAgo::widget(['timestamp' => $model->updated_at]); ?></time></p>
            </div>
            </p>
        </div>
    </div>
</div>
