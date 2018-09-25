<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\NewsSearch;

/**
 * Description of SignupForm
 *
 * @author webmaster
 */
class SearchForm extends Model{
    public $keyword;
    
    public function rules() {
        return [
            [['keyword'], 'trim'],
            [['keyword'], 'required'],
            [['keyword'], 'string', 'min' => 3],
        ];
    }
    
    public function search() {
        if($this->validate()){
            return NewsSearch::simpleSearch($this->keyword);
        }
    }
}
