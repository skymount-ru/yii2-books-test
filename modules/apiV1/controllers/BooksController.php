<?php

namespace app\modules\apiV1\controllers;

use app\models\Book;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class BooksController extends Controller
{
    public function actionIndex()
    {
        $result = Book::find()
            ->select([
                'title' => 'book.title',
                'author_name' => 'author.name',
            ])
            ->joinWith('author')
            ->asArray()
            ->all();

        return $this->asJson($result);
    }

    public function actionView($id)
    {
        $book = Book::findOne($id);

        return $this->asJson($book
            ? $book->toArray()
            : ['error' => 'Book not found.']
        );
    }
}
