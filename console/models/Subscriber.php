<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace console\models;
use Yii;

/**
 * Description of Subscriber
 *
 * @author webmaster
 */
class Subscriber {
    public static function getList() {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
