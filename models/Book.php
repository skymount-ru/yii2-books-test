<?php

namespace app\models;

use Yii;

class Book extends db\Book
{
    /**
     * Set visible fields.
     *
     * @return array|false
     */
    public function fields()
    {
        return [
            'id',
            'title',
            'author_name' => function ($model) { return $model->author->name; },
        ];
    }
}
