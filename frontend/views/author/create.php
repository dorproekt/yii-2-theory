<?php
/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin();?>
    <?php echo $form->field($model, 'first_name'); ?>
    <?php echo $form->field($model, 'last_name'); ?>
    <?php echo $form->field($model, 'birthdate'); ?>
    <?php echo $form->field($model, 'rating'); ?>
    <?php echo Html::submitButton('Create', ['class' => 'btn btn-success']); ?>
<?php ActiveForm::end();?>
