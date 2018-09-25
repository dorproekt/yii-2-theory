<h1>Изменить информацию</h1>
<form method="post">
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
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
<?php
    if($model->hasErrors()){
        echo '<pre>';
        print_r($model->getErrors());
    }
?>