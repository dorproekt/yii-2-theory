<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Страница регистрации</h1>
<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'firstName'); ?>
    <?php echo $form->field($model, 'middleName'); ?>
    <?php echo $form->field($model, 'lastName'); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'birthDate'); ?>
    <?php echo $form->field($model, 'hiringDate'); ?>
    <?php echo $form->field($model, 'position'); ?>
    <?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>
    <?php echo $form->field($model, 'idCode'); ?>
    <?php echo Html::submitButton('Отправить', ['class' => 'btn btn-primary'])?>
<?php ActiveForm::end(); ?>
<!--form method="post">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="middleName">Middle Name</label>
    <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="email">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>-->
<?php
    if($model->hasErrors()){
        echo '<pre>';
        print_r($model->getErrors());
    }
?>
