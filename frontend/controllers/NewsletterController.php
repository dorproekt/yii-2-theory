<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Subscribe;

/**
 * Description of NewsletterController
 *
 * @author webmaster
 */
class NewsletterController extends Controller {
    public function actionSubscribe(){
        $formData = Yii::$app->request->post();
        $model = new Subscribe();
        if(Yii::$app->request->isPost){
            $model->email = $formData['email'];
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Subscribe complate!!!');
            }
        }
        
        
        return $this->render('subscribe', [
            'model' => $model,
        ]);
    }
}
