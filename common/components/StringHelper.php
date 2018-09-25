<?php
namespace common\components;

use Yii;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StringHelper
 *
 * @author webmaster
 */
class StringHelper {
    private $limit;
    
    function __construct() {
        $this->limit = Yii::$app->params['shortTextLimited'];
    }

    public function getShort($string, $limit = null){
        if($limit === null){
            $limit = $this->limit;
        }
        return substr($string, 0, $limit);
    }
}
