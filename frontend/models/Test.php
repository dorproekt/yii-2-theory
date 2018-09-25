<?php
namespace frontend\models;
use Yii;

class Test{
    
    public static function getNewsList(){
        $sql = 'SELECT * FROM news';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        
        $helper = Yii::$app->stringHelper;
        
        foreach($result as &$item){
            $item['content'] = $helper->getShort($item['content'], 100);
        }
        
        return $result;
    }
    
    public static function getItem($id){
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id=$id";
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}