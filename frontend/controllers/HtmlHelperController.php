<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

/**
 * Description of HtmlHelpersController
 *
 * @author webmaster
 */
class HtmlHelperController extends \yii\web\Controller {
    
    public function actionDemo() {
        
        return $this->render('demo');
    }
    
}
