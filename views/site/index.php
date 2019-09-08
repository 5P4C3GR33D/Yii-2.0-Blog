
<?php
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dt_posts yii\data\ActiveDataProvider */

$this->title = 'Art![Blog]';
?>
<div class="container">
    <?=ListView::widget([
      'dataProvider' => $dt_posts,
      'itemView' => '_post',
      'layout' => '<div class = "row">{items}</div><div class = "text-center">{pager}</div>',
    ])?>
</div>
