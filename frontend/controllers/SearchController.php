<?php

namespace frontend\controllers;

use frontend\models\forms\SearchForm;
use Yii;

class SearchController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new SearchForm();
        
        $results = null;
                
        if($model->load(Yii::$app->request->post())){
            $results = $model->search();
        }
        
        return $this->render('index', [
            'model' => $model,
            'results' => $results
        ]);
    }

}
