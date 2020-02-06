<?php

use yii\helpers\Html;

?>
<div class="admin-default-index">
    <h1>Welcome page</h1>
    <p>
        Welcome to admin panel.
    </p>
    <div>
        <?= Html::a('Authors', ['/admin/author'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Books', ['/admin/book'], ['class' => 'btn btn-primary']) ?>
    </div>
</div>
