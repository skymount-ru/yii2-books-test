<?php

use yii\data\ActiveDataProvider;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Authors and Books';
?>
<div class="site-index">
    <h1><?= $this->title ?></h1>
    <hr>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            [
                'label' => 'Books',
                'format' => 'raw',
                'value' => function ($model) {
                    $books = $model->getBooks()->select('title')->column();
                    return $books ? implode('<br>', $books) : 'No books.';
                },
            ],
        ],
]) ?>
</div>
