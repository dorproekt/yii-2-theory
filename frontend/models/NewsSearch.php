<?php

namespace frontend\models;

use Yii;
/**
 * Description of NewsSearch
 *
 * @author webmaster
 */
class NewsSearch {
    
    public static function simpleSearch($keyword) {
        
        $sql = "SELECT * FROM news WHERE MATCH (content) AGAINST ('$keyword') LIMIT 200";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
}
