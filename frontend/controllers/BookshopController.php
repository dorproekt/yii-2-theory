<?php

namespace frontend\controllers;

use frontend\models\Book;
use Yii;
use frontend\models\Publisher;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        /*$query = Book::find();
        $query->where(['publisher_id' => 1]);
        $query->limit(4);
        $query->orderBy('date_published');
        $bookList = $query->all();*/
        //$bookList = Book::find()->where(['publisher_id' => 1])->limit(3)->orderBy('date_published')->all();
        $bookList = Book::find()->limit(30)->orderBy('date_published')->all();
        /*echo '<pre>';
        print_r($result);
        die;*/
        
        return $this->render('index', ['bookList' => $bookList]);
    }

    public function actionCreate(){
        
        $publishers = Publisher::getList();
        
        $book = new Book();
        
        if($book->load(Yii::$app->request->post()) && $book->save()){
            Yii::$app->session->setFlash('success', 'Книга добавлена');
            return $this->refresh();
        }
            
        return $this->render('create', [
            'book' => $book,
            'publishers' => $publishers
            ]
        );
    }
}
