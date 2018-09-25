<?php

namespace console\models;
use Yii;
/**
 * Description of News
 *
 * @author webmaster
 */
class News {
    const STATUS_NOT_SEND = 1;
    public static function getList(){
        $sql = "SELECT * FROM news WHERE status = ".self::STATUS_NOT_SEND;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        
        return self::preparetList($result);
    }
    public static function preparetList($result){
        foreach($result as &$item){
            $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
        }
        
        return $result;
    }
}
