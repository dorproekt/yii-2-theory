<?php

namespace frontend\widgets\newsList;

use yii\base\Widget;
use frontend\models\Test;
/**
 * Description of NewsList
 *
 * @author webmaster
 */
class NewsList extends Widget{
    public function run() {
       $list = Test::getNewsList();
       
       return $this->render('block', [
          'list' =>  $list,
       ]);
    }
}
