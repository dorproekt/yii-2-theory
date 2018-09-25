<?php
namespace frontend\controllers;


use yii\web\Controller;
use Faker\Factory;
use frontend\models\News;


class TestController extends Controller{
    
    public function actionGenerate() {

        
        for($i = 0; $i < 10000; $i++){
            $faker = Factory::create();
            $newsItem = new News();
            $newsItem->title = $faker->text(35);
            $newsItem->content = $faker->text(rand(1000, 2000));
            $newsItem->status = rand(0, 1);
            $newsItem->save();
        }
         
        die('Stop');
    }
    
}