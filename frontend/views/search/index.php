<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<h1>Search</h1>
<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'keyword'); ?>
    <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>
<?php if($results): ?>
    <?php foreach($results as $item): ?>
    <h2><?php echo $item['title']; ?></h2>
    <p><?php echo $item['content']; ?></p>
    <hr>
    <?php endforeach; ?>
<?php endif; ?>