<?php

namespace app\models;

use Yii;

class Author extends db\Author
{
    /**
     * Generates list of authors as pair of (Id, Name).
     *
     * @return array
     */
    public static function getIdList(): array
    {
        return Author::find()
            ->select(['name'])
            ->indexBy('id')
            ->asArray()
            ->column();
    }
}
