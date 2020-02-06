<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Authors and Books';
?>
<div class="site-index">
    <h1><?= $this->title ?></h1>
    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => function
    ]) ?>
</div>
