<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;
/**
 * Description of EmployeeController
 *
 * @author webmaster
 */
class EmployeeController extends Controller{
    
    public function actionIndex() {
        
        $employee1 = new Employee();
        
        $employee1->firstname = 'Alexandr';
        //$employee1->lastname = 'Gorban';
        $employee1['lastname'] = 'Maradona';
        $employee1->middlename = 'Alexandrovich';
        $employee1->salary = 1000;
        $arr = $employee1->toArray();
        echo "<pre>";
        print_r($arr);

    }
    
    public function actionRegister() {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
        
        $formData = Yii::$app->request->post();
        
        if(Yii::$app->request->isPost){
            $model->attributes = $formData['Employee'];
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'Registred');
            }
        }
        
        return $this->render('register', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdate() {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
        
        $formData = Yii::$app->request->post();
        
        if(Yii::$app->request->isPost){
            $model->attributes = $formData;
            if($model->validate() && $model->save()){
                Yii::$app->session->setFlash('success', 'update');
            }
        }
        
        return $this->render('update', ['model' => $model]);
    }
}
