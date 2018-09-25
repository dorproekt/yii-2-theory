<?php

namespace frontend\controllers;

use frontend\models\Author;
use Yii;
class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Author();
        
        if($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Автор успешно добавлен!');
            return $this->redirect('/author/index');
        }
        
        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Author::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Автор успешно удален!');
        
        return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
        if(Yii::$app->user->isGuest){
            $this->goHome();
        }
        
        $authorList = Author::find()->all();
        
        return $this->render('index', [
            'authorList' => $authorList
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Author::findOne($id);
        
        if($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Информация об авторе изменена!');
            return $this->redirect('/author/index');
        }
        
        return $this->render('update', [
            'model' => $model
        ]);
    }

}
